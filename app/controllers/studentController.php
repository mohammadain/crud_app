<?php 

/**
* 
*/
class studentController extends baseController
{
	function __construct()
	{
		parent::__construct();
	}
	function index() 
	{
		$this->view->render('student/student');
	}
	function add_student() 
	{
		$this->view->render('student/add_student');
	}
	function add_student_do() 
	{
		require 'app/models/student.php';
		$this->models = new student();
		$this->models->add_student_do();
	}
}

?> 