<?php


namespace App\AdminModule\Presenters;

use App\Presenters\BasePresenter;

/**
 * Základní presenter pro všechny ostatní presentery v CoreModule.
 * @package App\CoreModule\Presenters
 */
abstract class BaseAdminPresenter extends BasePresenter
{
        /** @var null|string Adresa presenteru pro logování uživatele v rámci CoreModule. */
        protected $loginPresenter = ':Admin:HomePage:login';
        
        protected function startup() {
            parent::startup();
        }
}