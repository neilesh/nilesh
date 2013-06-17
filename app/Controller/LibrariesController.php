<?php 
class LibrarirsController extends AppController
{
	function index()
	{
		$libraries=$this->Library->find('all');
					$this->set('libraries',$libraries);
	}
}
?>