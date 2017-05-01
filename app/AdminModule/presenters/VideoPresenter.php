<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\AdminModule\Presenters;
use App\CoreModule\Model\VideoManager;
use Nette\Application\UI\Form;
/**
 * Description of VideoPresenter
 *
 * @author Marek
 */
class VideoPresenter extends BaseAdminPresenter{
    
    private $videoManager;
    private $url;
    
    public function __construct(VideoManager $videoManager) {
        parent::__construct();
        $this->videoManager = $videoManager;
    }
    
    public function actionDefault($url, $id){
        if(!$url) 
            $this->url = 'galerie';
        if($id) 
            $this['videoForm']->setDefaults($this->videoManager->getVideo($id));
        else 
            $this->url = $url;
        
    }
    
    public function renderDefault(){
        $this->template->videos = $this->videoManager->getVideos($this->url);
        $this->template->url = $this->url;
    }
    
    public function actionRemove($url,$id){
        $this->videoManager->removeVideo($id);
        $this->flashMessage('Video s id '. $id . ' bylo úspěšně odstraněno.');
        $this->redirect(':Admin:Video:default', $url);
    }
    
    protected function createComponentVideoForm() {
        $form = new Form();
        $form->addHidden('video_id');
        $form->addHidden('page');
        $form->addHidden('sort');
        $form->addText('name', 'Název')->setRequired();
        $form->addText('link', 'Kód videa')->setRequired();
        $form->addSubmit('submit', 'Ulož');
        $form->onSuccess[] = [$this, 'videoFormSucceeded'];
        return $form;  
    }
    
    public function videoFormSucceeded($form, $values){
        $values->page = $this->url;
        $values->sort = ($this->videoManager->getVideos($this->url)->count()) + 1;
        try{
            $this->videoManager->saveVideo($values);
            $this->flashMessage('Video bylo úspěšně uloženo');
            $this->redirect(':Admin:Video:default', $this->url);
        } catch (Exception $ex) {
            $this->flashMessage('Neúspěch');

        }
        
    }
    
    protected function createComponentSortVideos(){
        $form = new Form();
        $form->addSubmit('submit', 'Ulož');
        $form->onSuccess[] = [$this, 'sortVideoSucceeded'];
        return $form;
    }
    
    public function sortVideoSucceeded($form, $values){
        
        $values['video_id'] = $form->getHttpData($form::DATA_TEXT | $form::DATA_KEYS, 'video_id[]'); 
        $values['sort'] = $form->getHttpData($form::DATA_TEXT | $form::DATA_KEYS, 'sort[]');
        for($x = 0; $x < count($values['video_id']); $x++){
            $this->videoManager->updateSettings(array($values['video_id'][$x], $values['sort'][$x]));
        }
        $this->redirect('this');
        
        
        
    }
    
}
