<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\CoreModule\Model;

use App\Model\BaseManager;
use App\CoreModule\Model\VideoManager;
use Nette\Utils\Finder;
use Nette\Utils\Image;
use Nette\Database\Context;

/**
 * Description of GalleryManager
 *
 * @author Marek
 */
class GalleryManager extends BaseManager{
    
    
    /** Konstanty pro práci s databází */
    const 
        TABLE_NAME = 'images',
        COLUMN_ID = 'image_id',
        COLUMN_PATH = 'path',
        COLUMN_THUMBS = 'thumbs',
        COLUMN_PAGE = 'page',
        COLUMN_SORT = 'sort';
    
    /** Konstruktor pro injekci Context */
    public function __construct(Context $database) {
        parent::__construct($database);
    }
    
    /** Vrátí všechny obrázky pro urcitou stranku @param $page */
    public function getImages($page)
    {
       return $this->database->table(self::TABLE_NAME)->where(self::COLUMN_PAGE, $page)->order(self::COLUMN_SORT);            
    }
    
    
    private function countImages($dir)
    {
        $images = array();
        foreach(Finder::findFiles('*.jpg')->in($dir) as $file){
            $images[] = $file;
        }
        return count($images);
    }
    
    private function saveImage($img){
        $image = $this->database->table(self::TABLE_NAME)->insert($img);        
        return $image->image_id;
    }
    
    public function saveImages($images, $dir, $url){
        $iterator = $this->countImages($dir);
        foreach($images as $image){
            
            $img['image_id'] = '';
            $img['path'] = $dir;
            $img['thumbs'] = $dir . 'thumbs/';
            $img['page'] = $url;
            $img['sort'] = $iterator;
            $id = $this->saveImage($img);
            $thumb = clone $image;
            $thumb->save($dir . 'thumbs/photo_' . $id . '.jpg');
            $image->save($dir . 'photo_' . $id . '.jpg');
            
            
            $iterator++;
        }
    }
    
    public function removeImage($id)
    {
        $img = $this->database->table(self::TABLE_NAME)->where(self::COLUMN_ID, $id)->fetch();
        $path = $img['path'] . 'photo_' . $img['image_id'] . '.jpg';
        $path2 = $img['thumbs'] . 'photo_' . $img['image_id'] . '.jpg';
        if(file_exists($path) && file_exists($path2)){
            unlink($path);
            unlink($path2);
        }
        $this->database->table(self::TABLE_NAME)->where(self::COLUMN_ID, $id)->delete();
            
    }
    
    public function updateSettings($image){
        
            $this->database->table(self::TABLE_NAME)->where(self::COLUMN_ID, $image[0])->update(['sort' => $image[1]]);
        
        
    }
    
    
    
    
    
}
