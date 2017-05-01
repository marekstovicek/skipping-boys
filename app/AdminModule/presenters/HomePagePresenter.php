<?php

namespace App\AdminModule\Presenters;

use Nette\Application\UI\Form;


/**
 * Description of HomePagePresenter
 *
 * @author Marek
 */
class HomePagePresenter extends BaseAdminPresenter{

    public function startup() {
        parent::startup();
    }
    
    public function actionLogin(){
        //if($this->getUser()->isLoggedIn()) $this->redirect(':Admin:HomePage:default');
    }
    
    public function actionLogout(){
        $this->getUser()->logout(true);
        $this->redirect(':Core:Page:default');
    }

    public function renderDefault(){
        $identity = $this->getUser()->getIdentity();
        if($identity) $this->template->username = $identity->getData()['username'];
    }
    
    protected function createComponentLoginForm() {
        $form = new Form();
        $form->addText('username', 'Uživatel: ')->setRequired();
        $form->addPassword('password', 'Heslo: ')->setRequired();
        $form->addSubmit('submit', 'Přihlásit');
        $form->onSuccess[] = [$this, 'loginFormSucceeded'];
        return $form;
    }
    
    public function loginFormSucceeded($form, $values){
        try {
            $this->getUser()->login($values->username, $values->password);
            $this->redirect(':Admin:HomePage:default');
        } catch (\Nette\Security\AuthenticationException $ex) {
            $this->flashMessage($ex->getMessage());
            $this->redirect('this');
        }
    }
    
    
    
    
    
}
