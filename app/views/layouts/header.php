<!doctype html>
<html lang="en">
<head>
  <title>Crud Application</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>public/css/default.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="<?php echo URL;?>public/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo URL;?>public/js/custom.js"></script>
</head>
<body>
<header>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="<?php echo URL;?>">Crud Application</a>
	    </div>
	    <ul class="nav navbar-nav">
			<li class="active"><a href="<?php echo URL;?>">Home</a></li>
			<li><a href="<?php echo URL;?>studentController">Student</a></li>
			<li><a href="<?php echo URL;?>teacherController">Teacher</a></li>
			<li><a href="<?php echo URL;?>courseController">Course</a></li>
	    </ul>
	  </div>
	</nav>
</header>

<main>
	<div class="container-fluid main-content">


