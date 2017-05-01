<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\CoreModule\Model;

use App\Model\BaseManager;
use Nette\Database\Context;
use Nette\Database\Table\IRow;
use Nette\Database\Table\Selection;
use Nette\Utils\ArrayHash;

/**
 * Description of VideoManager
 *
 * @author Marek
 */
class VideoManager extends BaseManager{
    
    const 
        TABLE_NAME = 'videos',
        COLUMN_ID = 'video_id',
        COLUMN_NAME = 'name',
        COLUMN_LINK = 'link',
        COLUMN_PAGE = 'page',
        COLUMN_SORT = 'sort';
    
    public function getVideos($page)
    {
        return $this->database->table(self::TABLE_NAME)->where(self::COLUMN_PAGE, $page)->order(self::COLUMN_SORT);
    }
    
    public function getVideo($id){
        return $this->database->table(self::TABLE_NAME)->where(self::COLUMN_ID, $id)->fetch();
    }
    
    public function saveVideo($video){
       
        if($video[self::COLUMN_ID]){
            $this->database->table(self::TABLE_NAME)->where(self::COLUMN_ID, $video[self::COLUMN_ID])->update($video);
        }
        else{
           $code = explode('=', $video->link);
           $video->link = '<iframe width="440" height="220" src="https://www.youtube.com/embed/' . $code[1] . '" frameborder="0" allowfullscreen></iframe>';
           $this->database->table(self::TABLE_NAME)->insert($video); 
        }
           
       
    }
    
    public function removeVideo($id){
       $this->database->table(self::TABLE_NAME)->where(self::COLUMN_ID, $id)->delete();
    }
    
    public function updateSettings($video){
        
            $this->database->table(self::TABLE_NAME)->where(self::COLUMN_ID, $video[0])->update(['sort' => $video[1]]);
        
        
    }
            
    
}
