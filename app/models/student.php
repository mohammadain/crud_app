<?php 

/**
* 
*/
class student extends baseModel
{
	public function __construct()
	{
		parent::__construct();
	}
	public function add_student_do() 
	{
		$stmt = $this->db->prepare("INSERT INTO students (student_id, student_name, student_birthday, student_phone, student_city) VALUES (:student_id, :student_name, :student_birthday, :student_phone, :student_city)");
		$stmt->execute(array(':student_id' => $_POST['student_id'], ':student_name' => $_POST['student_name'], ':student_birthday' => $_POST['student_bday'], ':student_phone' => $_POST['student_phone'], ':student_city' => $_POST['student_city']));
		header('location: add_student');
	}
}




?>

 