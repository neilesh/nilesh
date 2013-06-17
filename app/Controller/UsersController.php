<?php
class UsersController extends AppController {
    public $scaffold = 'admin';
function index(){
  $users = $this->User->find('all');
            $this->set('users', $users);
  }

  function register() {
    if (!empty($this->data))
                {
                                $this->User->create($this->data);
                                if ($this->User->save()) 
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
    function edit($id = null) {

                    if (!$id && empty($this->data)) {

                        $this->Session->setFlash('Invalid user');
                        $this->redirect(array('action' => 'index'));
                    }
                    if (!empty($this->data)) {
                        if ($this->User->save($this->data)) {
                            $this->Session->setFlash('The user has been saved');
                            $this->redirect(array('controller' => 'users','action' => 'index'));

                        } else {
                            $this->Session->setFlash('The user could not be saved. Please, try again.');
                        }
                    }
                    if (empty($this->data)) {
                        $this->data = $this->User->read(null, $id);
                    }
                }

                function view($id = null) {
        if (!$id) {
            $this->Session->setFlash('Invalid user');
            $this->redirect(array('action' => 'index'));
        }
        $this->set('user', $this->User->findById($id));
    }

     public function delete($id = null)
             {
                if (!$id) {
                $this->Session->setFlash('Invalid id for user');
                $this->redirect(array('action' => 'index'));
                }
                if ($this->User->delete($id)) {
                $this->Session->setFlash('User deleted');
                } else {
                $this->Session->setFlash(__('User was not deleted',
                true));
                }
                $this->redirect(array('action' => 'index'));
             }
}
?>