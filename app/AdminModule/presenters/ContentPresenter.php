<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\AdminModule\Presenters;

use App\Presenters\BasePresenter;
use App\CoreModule\Model\PageManager;
use Nette\Application\UI\Form;

/**
 * Description of ContentPresenter
 *
 * @author Marek
 */
class ContentPresenter extends BaseAdminPresenter{
    
    private $pageManager;
    
    public function __construct(PageManager $pageManager) {
        parent::__construct();
        $this->pageManager = $pageManager;
    }
    
    public function actionDefault($url){
        if($url) ($page = $this->pageManager->getPage ($url)) ? $this['contentForm']->setDefaults($page) : $this->flashMessage ('Stránka neexistuje');
    }
    
    public function renderDefault($url){
        if(!$url) $url = 'uvod';
        $this->template->url = $url;
    }
    
    protected function createComponentContentForm(){
        $form = new Form();
        $form->addHidden('page_id');
        $form->addTextArea('content', 'Textová část stránky')->setRequired();
        $form->addSubmit('submit', 'Uložit');
        $form->onSuccess[] = [$this, 'contentFormSucceeded'];
        return $form;
    }
    
    public function contentFormSucceeded($form, $values){
        $this->pageManager->savePage($values);
        $this->redirect('this');
    }
    
}
