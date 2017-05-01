<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model;

use Nette\Database\Context;
use Nette\Object;

/**
 * Description of BaseManager
 * Výchozí manager
 * 
 * @author Marek
 */
class BaseManager extends Object{
    
    protected $database;
    
    public function __construct(Context $database) {
        $this->database = $database;
    }
    
}
