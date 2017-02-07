<?php 

/**
* 
*/
class help extends baseController
{
	function __construct()
	{
		parent::__construct();
	}
	function index() {
		$this->view->render('student/add_student');
	}
	public function other($arg) {

	/*	require 'app/models/student.php';
		$model = new student();*/
	

	}	
}


?>