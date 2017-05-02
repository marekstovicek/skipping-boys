<?php

namespace App\CoreModule\Model;

use App\Model\BaseManager;
use App\CoreModule\Model\VideoManager;
use Nette\Database\Context;
use Nette\Database\Table\IRow;
use Nette\Database\Table\Selection;
use Nette\Utils\ArrayHash;


/**
 * Description of ArticleManager
 * Třída pro správu článků na webu skippingboys.cz
 *
 * @author Marek
 */
class PageManager extends BaseManager{
    
    /**
     * 
     */
    const 
        TABLE_NAME = 'page',
        COLUMN_ID = 'page_id',
        COLUMN_URL = 'url';
    
    /**
     * 
     * @return type
     */
    public function getPages()
    {
        return $this->database->table(self::TABLE_NAME)->order(self::COLUMN_ID . ' DESC');
    }
    
    /**
     * 
     * @param type $url
     * @return type
     */
    public function getPage($url)
    {
        $row = $this->database->table(self::TABLE_NAME)->where(self::COLUMN_URL, $url)->fetch();
        return $row;
    }
    
    /**
     * 
     * @param type $page
     */
    public function savePage($page){
        $this->database->table(self::TABLE_NAME)->where(self::COLUMN_ID, $page[self::COLUMN_ID])->update($page);
    }
    
    
    
}
