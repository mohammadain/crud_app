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
	function check_student_form()
	{
		$stmt = $this->db->prepare("SELECT * FROM students WHERE student_id = :student_id;");
		$stmt->execute(array(':student_id' => $_POST['student_id']));
		return print !!$stmt->fetch(PDO::FETCH_ASSOC);
	}
	public function listing_student() 
	{  
		$stmt = $this->db->prepare("SELECT * FROM students");
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();
		$student_data = $stmt->fetchAll();
		return $student_data;
	}
	public function delete_student() 
	{  
		$checks = implode("','", $_POST['checkbox']);
		$stmt = $this->db->prepare("DELETE FROM `students` WHERE `student_id` IN ('$checks');");
		$stmt->execute();
		header('location: listing_student');
		

	}
}




?>

 