<?php
class IndexController extends AppController {
	function index(){
		
	}
	public function admin_index(){

	}
	public function view(){
		if (!$id) {
            $this->Session->setFlash('Invalid user');
            $this->redirect(array('action' => 'index'));
        }
        $this->set('user', $this->User->findById($id));
	}

}
?>