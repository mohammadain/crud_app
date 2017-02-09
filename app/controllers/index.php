<?php 

// Creating index controllar for home page
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
}

?> 