<?php 

// Creating controller for student
class studentController extends baseController
{
	function __construct()
	{
		parent::__construct();

		// Initializing model for student studentController
		require 'app/models/student.php';
		$this->model = new student();

	}

	function index() 
	{	
		$this->view->render('student/student');
	}

	// Function for rendering add student form
	function add_student() 
	{
		$this->view->render('student/add_student');
	}

	// Function for saving student data 
	function add_student_do() 
	{
		$this->model->add_student_do();
	}

	// Function for checking if student already exist
	function check_student_form()
	{
		$this->model->check_student_form();
	}

	// Function for getting student data listing from model 
	function listing_student() 
	{
		$student_listing = $this->model->listing_student();
		$this->view->render('student/listing_student', $student_listing);
	}

	// Function for calling student model for deleting checked student
	function delete_student() 
	{
		$this->model->delete_student();
	}

	// Function for calling student model for deleting single student
	function delete_single_student() 
	{
		$this->model->delete_single_student();
	}

	// Function rendering edit form
	function edit_student($student_id)
	{
		$student_data = $this->model->edit_student($student_id);
		$this->view->render('student/edit_student', $student_data);
	}

	// FUnction calling student model for updating data
	function update_student()
	{
		$this->model->update_student();
	}
}

?> 