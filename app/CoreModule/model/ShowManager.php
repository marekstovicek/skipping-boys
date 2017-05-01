<?php

namespace App\CoreModule\Model;

use App\Model\BaseManager;
use Nette\Utils\Paginator;



/**
 * Description of ShowManager
 *
 * @author Marek
 */
class ShowManager extends BaseManager{
    
    const
        TABLE_NAME = 'show',
        COLUMN_ID = 'show_id',   
        COLUMN_DATE_FROM = 'date_from';
    
    
    public function getShows()
    {
            return $this->database->table(self::TABLE_NAME)->order(self::COLUMN_DATE_FROM . ' DESC');
            
        
    }
    
    public function getShow($showId)
    {
        return $this->database->table(self::TABLE_NAME)->where(self::COLUMN_ID, $showId)->fetch();
    }
    
    public function addShow($show)
    {
        $this->database->table(self::TABLE_NAME)->insert($show);
    }
    
    public function updateShow($show)
    {
        $this->database->table(self::TABLE_NAME)->where(self::COLUMN_ID, $show->show_id)->update($show);
    }
    
    public function removeShow($id){
        $this->database->table(self::TABLE_NAME)->where(self::COLUMN_ID, $id)->delete();
    }    
}
