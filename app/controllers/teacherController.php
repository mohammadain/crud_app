<?php 

// Creating controller for teacher
class teacherController extends baseController
{
	function __construct()
	{
		parent::__construct();

		// Initializing model for teacher teacherController
		require 'app/models/teacher.php';
		$this->model = new teacher();

	}

	function index() 
	{	
		$this->view->render('teacher/teacher');
	}

	// Function for rendering add teacher form
	function add_teacher() 
	{
		$this->view->render('teacher/add_teacher');
	}

	// Function for saving teacher data 
	function add_teacher_do() 
	{
		$this->model->add_teacher_do();
	}

	// Function for checking if teacher already exist
	function check_teacher_form()
	{
		$this->model->check_teacher_form();
	}

	// Function for getting teacher data listing from model 
	function listing_teacher() 
	{
		$teacher_listing = $this->model->listing_teacher();
		$this->view->render('teacher/listing_teacher', $teacher_listing);
	}

	// Function for calling teacher model for deleting checked teacher
	function delete_teacher() 
	{
		$this->model->delete_teacher();
	}

	// Function for calling teacher model for deleting single teacher
	function delete_single_teacher() 
	{
		$this->model->delete_single_teacher();
	}

	// Function rendering edit form
	function edit_teacher($teacher_id)
	{
		$teacher_data = $this->model->edit_teacher($teacher_id);
		$this->view->render('teacher/edit_teacher', $teacher_data);
	}

	// FUnction calling teacher model for updating data
	function update_teacher()
	{
		$this->model->update_teacher();
	}
}

?> 