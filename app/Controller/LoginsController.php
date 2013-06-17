<?php
class LoginsController extends AppController
{
		public function index()
		{

			$logins = $this->Login->find('all');
			$this->set('login', $logins);
		}

		public function login() {
							    if (!empty($this->data))
							                {
							                                $this->Login->create($this->data);
							                                if ($this->Login->save()) 
							                                {
							                                    $this->Session->setFlash('The user has been saved ');
							                                    $this->redirect(array('action' => 'view'));
							                                }
							                                 else
							                                    {
							                                        $this->Session->setFlash('The user could not be saved. Please, try again.');
							                                    }
							                }
  }

  public function view($id = null){
  	if($id){
  		$this->Session->setFlash('Invalid user');
            $this->redirect(array('action' => 'index'));
  	}
  	$this->set('login',$this->Login->findById($id));
  }



  public function edit($id= null){
  	if(!$id && empty($this->data)){
  		$this->Session->setFlash('User is not valid');
  	}
  	if(!empty($this->data)){
  		if($this->Login->save($this->data)){
  			$this->Session->setFlash('User has been saved');
  			$this->redirect(array('action'=>'index'));
  		}
  		else {
  			$this->Session->setFlash('User can not be saved , please try after some time');
  		}
  	}
  	if (empty($this->data)) {
                        $this->data = $this->Login->read(null, $id);
                    }
  }
}
 ?>