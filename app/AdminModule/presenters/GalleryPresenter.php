<?php



    namespace App\AdminModule\Presenters;


    use App\CoreModule\Model\GalleryManager;
    use App\CoreModule\Model\PageManager;
    use App\CoreModule\Model\VideoManager;
    use Nette\Application\UI\Form;
    use Nette\Http\FileUpload;
    use App\AdminModule\Components\GalleryImagesControl;
    /**
     * Description of GalleryPresenter
     *
     * @author Marek
     */
    class GalleryPresenter extends BaseAdminPresenter{

        private $galleryManager;
        private $pageManager;
        private $videoManager;
        private $url;

        public function __construct(GalleryManager $galleryManager, PageManager $pageManager, VideoManager $videoManager) {
            parent::__construct();
            $this->galleryManager = $galleryManager;
            $this->pageManager = $pageManager;
            $this->videoManager = $videoManager;
        }

        public function actionRemove($url, $id){
            $this->galleryManager->removeImage($id);
            $this->redirect(':Admin:Gallery:default', $url);
        }

        public function actionDefault($url){
            if(!$url) $url = 'galerie';
            $this->url = $url;

        }


        public function renderDefault(){
            $this->template->images = $this->galleryManager->getImages($this->url);
            $this->template->url = $this->url;

        }

        protected function createComponentUploadForm()
        {
            $form = new Form();        
            $form->addMultiUpload('images', 'Obrázky')
                    ->addRule(Form::IMAGE, 'Obrázek musí být typu JPEG, PNG nebo GIF')
                    ->setRequired(false);
            $form->addSubmit('submit', 'Nahraj');
            $form->onSuccess[] = [$this, 'uploadFormSucceeded'];
            return $form;
        }

        protected function createComponentSortImages(){
            $form = new Form();
            $form->addSubmit('submit', 'Ulož');
            $form->onSuccess[] = [$this, 'sortImagesSucceeded'];
            return $form;
        }


         public function sortImagesSucceeded($form, $values){

            $values['image_id'] = $form->getHttpData($form::DATA_TEXT | $form::DATA_KEYS, 'image_id[]'); 
            $values['sort'] = $form->getHttpData($form::DATA_TEXT | $form::DATA_KEYS, 'sort[]');
            for($x = 0; $x < count($values['image_id']); $x++){
                $this->galleryManager->updateSettings(array($values['image_id'][$x], $values['sort'][$x]));
            }
            $this->redirect('this');



        }

        public function uploadFormSucceeded($form, $values)
        {
            $images = array_map(function (FileUpload $image){
                    return $image->toImage();
                }, $values->images);
            try{
                $this->galleryManager->saveImages($images, 'images/'.$this->url.'/', $this->url);
                $this->flashMessage('Obrázky byli úspěšně uloženy.');
                $this->redirect('this');
            } catch (Exception $ex) {
                $this->flashMessage('Chyba při ukládání obrázků');
            }
        }

    }
