<?php 

// Including all mandatory files
require 'core/controllers/baseController.php';
require 'core/views/viewManager.php';
require 'core/models/baseModel.php';
require 'app/config.php';
require 'core/models/database/Database.php';

$url = isset($_GET['url']) ? $_GET['url'] : null;
$url = rtrim($url, '/');
$url = explode('/', $url);

if (empty($url[0])) {
	require 'app/controllers/index.php';
	$controller = new index();
	$controller->index(); 
	return false;
}

require 'app/controllers/' . $url[0] . '.php';
$controller = new $url[0];

if(isset($url[2])) {
	$controller->{$url[1]}($url[2]);
}
else {
	if (isset($url[1])) {
		$controller->{$url[1]}();
	} else {
		$controller->index(); 
	}
}

?>
     