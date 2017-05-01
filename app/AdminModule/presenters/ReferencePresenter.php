<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\AdminModule\Presenters;
use IPub\VisualPaginator\Components as VisualPaginator;

use App\Presenters\BasePresenter;
use Nette\Application\UI\Form;
use App\CoreModule\Model\ShowManager;
use Nextras\Forms\Controls;
use App\Model\DateUtils;

/**
 * Description of ReferentionPresenter
 *
 * @author Marek
 */
class ReferencePresenter extends BaseAdminPresenter{
    
    private $showManager;
    
    public function __construct(ShowManager $showManager) {
        parent::__construct();
        $this->showManager = $showManager;
    }
    
    public function actionDefault($id){
        if($id) ($show = $this->showManager->getShow($id)) ? $this['editForm']->setDefaults($show) : $this->flashMessage('Akce neexistuje');
    }
    
    public function renderDefault(){
        $shows = $this->showManager->getShows();
        $visualPaginator = $this['visualPaginator'];
        $paginator = $visualPaginator->getPaginator();
        $paginator->itemsPerPage = 10;
        $paginator->itemCount = $shows->count();
        $shows->limit($paginator->itemsPerPage, $paginator->offset);    
        
        $this->template->shows = $shows;
    }
    
    public function actionRemove($id)
    {
        $this->showManager->removeShow($id);
        $this->flashMessage('Akce smazána');
        $this->redirect(':Admin:Reference:default');
    }
    
    protected function createComponentEditForm()
    {
        $form = new Form();
        $form->addHidden('show_id');
        $form->addDatePicker('date_from', 'Datum od')->setRequired();
        $form->addDatePicker('date_to', 'Datum do');
        $form->addText('name', 'Název akce')->setRequired();
        $form->addSubmit('submit', 'Uložit');
        $form->onSuccess[] = [$this, 'editFormSucceeded'];
        return $form;
    }
    
    protected function createComponentVisualPaginator(){
        $control = new VisualPaginator\Control;
        $control->setTemplateFile('bootstrap.latte');
        $control->disableAjax();
        
        return $control;
    }
    
    public function editFormSucceeded($form, $values)   
    {
        if(!$this->showManager->getShow($values->show_id)){
            unset($values->show_id);
            $this->showManager->addShow($values);
        }
        else{
            $this->showManager->updateShow($values);
        }
            
        $this->redirect(':Admin:Reference:default');
    }
    
}
