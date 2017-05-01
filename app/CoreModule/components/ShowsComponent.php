<?php


namespace App\CoreModule\Components;

use App\CoreModule\Model\PageManager;
use App\CoreModule\Model\ShowManager;
use Nette\Application\UI\Control;
use Nette\Database\Table\IRow;
use App\Model\DateUtils;
/**
 * Description of ShowsComponent
 *
 * @author Marek
 */
class ShowsComponent extends Control{
    
    const TEMPLATE_PATH = '/../templates/components/shows.latte';
   
    
    private $showManager;
    
    public $shows;
    
    public function __construct(ShowManager $showManager) {
        parent::__construct();
        $this->showManager = $showManager;
    }
    
    public function render(){
        $this->template->setFile(dirname(__FILE__) . self::TEMPLATE_PATH);
        $this->template->shows = $this->showManager->getShows();
        //$this->template->admin = $this->getPresenter()->getUser()->isAllowed();
        $this->template->addFilter('prettyDate', function($date){
        
            return DateUtils::prettyDate($date);
        }
        );
        $this->template->render();
    }
    
    public function handleRemoveShow($id){
        $this->showManager->removeShow($id);
        $presenter = $this->getPresenter();
        if($presenter->isAjax()){
            $this->redrawControl();
        }
        
    }
    
}
