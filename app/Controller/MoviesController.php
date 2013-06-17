<?php
class MoviesController extends AppController {
    public $components = array('Session');  
   
   
        public function index()
        {
            $movies = $this->Movie->find('all');
            $this->set('movies', $movies);
         }
   
            public function add()
             {
                    if (!empty($this->data)) {
                    $this->Movie->create($this->data);
                    if ($this->Movie->save()) {
                    $this->Session->setFlash('The movie has been saved to list of movies');
                    $this->redirect(array('action' => 'add'));
                    } else {
                    $this->Session->setFlash('The movie could not be saved. Please, try again.');
                    }
                    }
            }
               
           
            public function delete($id = null)
             {
                if (!$id) {
                $this->Session->setFlash('Invalid id for movie');
                $this->redirect(array('action' => 'index'));
                }
                if ($this->Movie->delete($id)) {
                $this->Session->setFlash('Movie deleted');
                } else {
                $this->Session->setFlash(__('Movie was not deleted',
                true));
                }
                $this->redirect(array('action' => 'index'));
             }



            function edit($id = null) {
                    if (!$id && empty($this->data)) {
                        $this->Session->setFlash('Invalid movie');
                        $this->redirect(array('action' => 'index'));
                    }
                    if (!empty($this->data)) {
                        if ($this->Movie->save($this->data)) {
                            $this->Session->setFlash('The movie has been saved');
                            $this->redirect(array('action' => 'index'));
                        } else {
                            $this->Session->setFlash('The movie could not be saved. Please, try again.');
                        }
                    }
                    if (empty($this->data)) {
                        $this->data = $this->Movie->read(null, $id);
                    }
                }
               
    function view($id = null) {
        if (!$id) {
            $this->Session->setFlash('Invalid movie');
            $this->redirect(array('action' => 'index'));
        }
        $this->set('movie', $this->Movie->findById($id));
    }
}
?>