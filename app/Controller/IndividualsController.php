<?php
class IndividualsController extends AppController {
  /*function index()
  {
    echo "Welcome to sodel";
  }*/
  function register() {
    echo $var=$this->request->is('post');
    if (!empty($var)) {
    	if ($this->User->save($this->request->data)) {
      	$this->Session->setFlash('The user has been saved');
        $this->redirect(array('action' => 'index'));

      } else {
        $this->Session->setFlash('The user could not be saved. Please, try again.');
      }
    }
  }

}
?>