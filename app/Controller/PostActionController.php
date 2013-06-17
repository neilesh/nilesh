<?php
class PostActionController extends AppController {
	public function index(){
		/*$this->redirect->('array'=>'')*/
	}
	public function post_action(){
		$this->redirect(array('action' => 'nano/post_action'));
	}
}