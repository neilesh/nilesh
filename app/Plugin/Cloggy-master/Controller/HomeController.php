<?php

class HomeController extends CloggyAppController {

    public $uses = array('Cloggy.CloggyUser', 'Cloggy.CloggyValidation', 'Cloggy.CloggyUserLogin');
    public $helpers = array('Form');
    private $_userCount;
    private $_userId;

    public function beforeFilter() {

        parent::beforeFilter();

        //allow all
        $this->Auth->allow();

        /*
         * check if has users
         */
        $this->_userCount = $this->CloggyUser->find('count', array('contain' => false));
        $this->_userId = $this->Auth->user('id');
    }

    public function index() {

        /*
         * check if user has logged in
         */
        if ($this->Auth->loggedIn()) {
            $this->redirect($this->Auth->loginRedirect);
        }

        $this->_redirectIfNoUsers();
        $this->redirect(array('action' => 'login'));
    }

    public function login() {

        //redirect if user empty
        $this->_redirectIfNoUsers();
        
        /*
         * form submitted
         */
        if ($this->request->is('post')) {

            if ($this->Auth->login()) {//if user loggedIn

                /*
                 * > set user id
                 * > set user last login time
                 * > set user login
                 * > redirect to dashboard
                 */
                $this->_userId = $this->Auth->user('id');
                $this->CloggyUser->setUserLastLogin($this->_userId);
                $this->CloggyUserLogin->setLogin($this->_userId);
                $this->redirect($this->Auth->loginRedirect);
                
            } else {
                $this->Auth->flash(__d('cloggy','Wrong username or password'));
                $this->redirect($this->Auth->loginAction);
            }
        }

        $this->set('title_for_layout', __d('cloggy','Cloggy - Administrator Login'));
    }

    public function logout() {

        /*
         * > set user last login
         * > remove user login
         * > redirect to home controller
         */
        $this->CloggyUser->setUserLastLogin($this->_userId);
        $this->CloggyUserLogin->removeLogin($this->_userId);
        $this->redirect($this->Auth->logout());
    }

    private function _redirectIfNoUsers() {

        /*
         * if there are no users
         * then install (setup first users)
         */
        if ($this->_userCount < 1) {
            $this->redirect($this->_base . '/install');
        }
    }

}