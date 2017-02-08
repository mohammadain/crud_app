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
		$this->model = new student();
		$this->model->add_student_do();
	}
	function check_student_form()
	{
		require 'app/models/student.php';
		$this->model = new student();
		$this->model->check_student_form();
	}
	function listing_student() 
	{
		require 'app/models/student.php';
		$this->model = new student();
		$student_listing = $this->model->listing_student();
		$this->view->render('student/listing_student', $student_listing);
	}
	function delete_student() 
	{
		require 'app/models/student.php';
		$this->model = new student();
		$this->model->delete_student();
	}
}

?> 