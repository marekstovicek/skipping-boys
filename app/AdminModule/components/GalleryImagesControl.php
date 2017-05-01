<?php

namespace App\AdminModule\Components;

use App\CoreModule\Model\Gallery;
use Nette\Application\UI\Control;
use Nette\Database\Table\IRow;
/**
 * Description of GalleryImagesControl
 *
 * @author Marek
 */
class GalleryImagesControl extends Control{
    
    const TEMPLATE = '/../templates/components/galleryImages.latte';
    
    private $galleryManager;
    
    public function __construct() {
        parent::__construct();
        $this->galleryManager = new Gallery('images/gallery/');
    }
    
    public function render()
    {
        $this->template->setFile(dirname(__FILE__) . self::TEMPLATE);
        $this->template->imagesCount = $this->galleryManager->getImagesCount();
        $this->template->dir = $this->galleryManager->getImagesPath();
        $this->template->render();
    }
    
    public function handleDeleteImage($i)
    {
       $this->galleryManager->removeImage($i);
       $this->getPresenter()->redirect('this');
    }
    
}
