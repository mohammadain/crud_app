<?php 

// Creating controller for course
class courseController extends baseController
{
	function __construct()
	{
		parent::__construct();

		// Initializing model for course courseController
		require 'app/models/course.php';
		$this->model = new course();

	}

	function index() 
	{	
		$this->view->render('course/course');
	}

	// Function for rendering add course form
	function add_course() 
	{
		$this->view->render('course/add_course');
	}

	// Function for saving course data 
	function add_course_do() 
	{
		$this->model->add_course_do();
	}

	// Function for checking if course already exist
	function check_course_form()
	{
		$this->model->check_course_form();
	}

	// Function for getting course data listing from model 
	function listing_course() 
	{
		$course_listing = $this->model->listing_course();
		$this->view->render('course/listing_course', $course_listing);
	}

	// Function for calling course model for deleting checked course
	function delete_course() 
	{
		$this->model->delete_course();
	}

	// Function for calling course model for deleting single course
	function delete_single_course() 
	{
		$this->model->delete_single_course();
	}

	// Function rendering edit form
	function edit_course($course_id)
	{
		$course_data = $this->model->edit_course($course_id);
		$this->view->render('course/edit_course', $course_data);
	}

	// FUnction calling course model for updating data
	function update_course()
	{
		$this->model->update_course();
	}
}

?> 