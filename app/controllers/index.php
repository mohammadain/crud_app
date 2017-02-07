<?php 

/**
* 
*/
class index extends baseController
{
	function __construct()
	{
		parent::__construct();
	}
	function index() 
	{
		$this->view->render('layouts/default');
	}
	function detail() 
	{
		$this->view->render('student/student');
	}
}

?> 