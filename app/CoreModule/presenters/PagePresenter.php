<?php

namespace App\CoreModule\Presenters;

use App\CoreModule\Model\PageManager;
use App\CoreModule\Model\ShowManager;
use App\CoreModule\Model\VideoManager;
use App\CoreModule\Model\GalleryManager;
use App\CoreModule\Components\ShowsComponent;
use App\Presenters\BasePresenter;
use Nette\Application\UI\Form;
use Nette\Application\BadRequestException;
use Nette\Utils\ArrayHash;
use IPub\VisualPaginator\Components as VisualPaginator;

/**
 * Description of ArticlePresenter
 *
 * @author Marek
 */
class PagePresenter extends BasePresenter{
    
    const 
        DEFAULT_URL = 'uvod',
        ABOUT_URL = 'o-nas',
        SHOW_URL = 'vystoupeni',
        CONTACT_URL = 'kontakt',
        GALLERY_URL = 'galerie';
    
    protected $pageManager;
    protected $videoManager;
    protected $showManager;
    protected $galleryManager;
    
    public function __construct(PageManager $pageManager,
                                ShowManager $showManager,
                                VideoManager $videoManager,
                                GalleryManager $galleryManager
    ) {
        parent::__construct();
        $this->pageManager = $pageManager;
        $this->showManager = $showManager;
        $this->videoManager = $videoManager;
        $this->galleryManager = $galleryManager;
    }
    
    public function renderDefault()
    {
        $url = self::DEFAULT_URL;
        if(!($page = $this->pageManager->getPage($url))) throw new BadRequestException();
        $this->template->page = $page;
        $videos = $this->videoManager->getVideos($url);
        $videosArr = array();
        foreach($videos as $video){
            $vid = explode('"', $video['link']);
            $vid[1] = '"620"';
            $vid[3] = '"340"';
            $videosArr[] = $vid[0].$vid[1].$vid[2].$vid[3].$vid[4].'"'.$vid[5].'?rel=0&autoplay=1"'.$vid[6].$vid[7].$vid[8];
        }
        
        if($video) $this->template->video = $videosArr;
    }
    
    public function renderAbout()
    {
        $url = self::ABOUT_URL;
        if(!($page = $this->pageManager->getPage($url))) throw new BadRequestException();
        $this->template->page = $page;
    }      
    
    public function renderShow()
    {
        $url = self::SHOW_URL;
        if(!($page = $this->pageManager->getPage($url))) throw new BadRequestException();
        $this->template->page = $page;
        $shows = $this->showManager->getShows();
        $visualPaginator = $this['visualPaginator'];
        $paginator = $visualPaginator->getPaginator();
        $paginator->itemsPerPage = 10;
        $paginator->itemCount = $shows->count();
        $shows->limit($paginator->itemsPerPage, $paginator->offset);    
        
        $this->template->shows = $shows;
    }
    
    public function renderGallery()
    {
        $url = self::GALLERY_URL;
        if(!($page = $this->pageManager->getPage($url))) throw new BadRequestException();
        $this->template->page = $page;
        $this->template->photos = $this->galleryManager->getImages('galerie');
        $this->template->videos = $this->videoManager->getVideos('galerie');
    }
    
    public function renderContact()
    {
        $url = self::CONTACT_URL;
        if(!($page = $this->pageManager->getPage($url))) throw new BadRequestException();
        $this->template->page = $page;
    }
    
    protected function createComponentVisualPaginator(){
        $control = new VisualPaginator\Control;
        $control->setTemplateFile('bootstrap.latte');
        $control->disableAjax();
        
        return $control;
    }
    
  
    
    
    
    
    
    
    
    
    
    

    
}
