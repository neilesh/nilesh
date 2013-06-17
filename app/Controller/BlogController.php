 <?php
class BlogController extends AppController{
	var $name= 'Blog';
	var $uses = array('Blog');
	function index($view = null){
		
		
		if (isset($view))

    {
      $this->Blog->id=$view;
      $this->set('article', $this->Blog->read());
      $this->render('article');
    }
    else{
		$this->set('articles', $this->Blog->find('all'));
	}
	}
}

 ?>