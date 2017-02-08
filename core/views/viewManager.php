<?php 

/**
* 
*/
class viewManager
{
	function __construct()
	{
	}
	public function render($name, $data = array())
	{
		require 'app/views/layouts/header.php';
		require 'app/views/'. $name . '.php';
		require 'app/views/layouts/footer.php';
	}
}

?>