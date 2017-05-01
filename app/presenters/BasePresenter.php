<?php

namespace App\Presenters;

use Nette;
use Nette\Application\UI\Presenter;
use App\Model;
use App\Model\DateUtils;
use Nette\Database\Context;
use App\CoreModule\Model\GalleryManager;
use Nette\Http\Request;


/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Presenter
{
    
    protected $loginPresenter = null;
    
    private $galleryManager;
    
    public function injectGalleryManager(GalleryManager $galleryManager){
        $this->galleryManager = $galleryManager;
    }
    
    protected function startup()
        {
                parent::startup();      
                if (!$this->getUser()->isAllowed($this->getName(), $this->getAction())) {
                        $this->flashMessage('Nejsi přihlášený nebo nemáš dostatečná oprávnění.');
                        if ($this->loginPresenter) $this->redirect($this->loginPresenter);
                }
                
                 
        }
    
    public function beforeRender() {
        parent::beforeRender();
        
        $foto = $this->galleryManager->getImages('photo-box');
        $fotky = array();
        foreach($foto as $fotka){
            $fotky[] = $fotka['path'].'photo_'.$fotka['image_id'].'.jpg';
        }
        $this->template->foto = $fotky;
        
        $this->template->admin = $this->getUser()->isInRole('admin');
        $this->template->formPath = __DIR__ . '/../templates/components/form.latte';
        $this->template->active = $this->getAction();
        
        
        
        $this->template->addFilter('prettyDate', function($date,$date2){
            if($date2 && $date2 != $date){
                $ex = explode('-', $date);
                $ex_without_time = explode(' ', $ex[2]);
                return $ex_without_time[0]. '. - '. DateUtils::prettyDate($date2);
            }
            else{
                return DateUtils::prettyDate($date);
            }
            
        }
        );
    }
}
