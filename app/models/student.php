<?php 

// Creating student model class  
class student extends baseModel
{
	public function __construct()
	{
		parent::__construct();
	}

	// Function for adding students
	public function add_student_do() 
	{
		$stmt = $this->db->prepare("INSERT INTO students (student_id, student_name, student_birthday, student_phone, student_city) VALUES (:student_id, :student_name, :student_birthday, :student_phone, :student_city)");
		$stmt->execute(array(':student_id' => $_POST['student_id'], ':student_name' => $_POST['student_name'], ':student_birthday' => $_POST['student_bday'], ':student_phone' => $_POST['student_phone'], ':student_city' => $_POST['student_city']));
		header('location: add_student');
	}

	// Function for checking is student id exist
	public function check_student_form()
	{
		$stmt = $this->db->prepare("SELECT * FROM students WHERE student_id = :student_id;");
		$stmt->execute(array(':student_id' => $_POST['student_id']));
		return print !!$stmt->fetch(PDO::FETCH_ASSOC);
	}

	// Function for listing students
	public function listing_student() 
	{  
		$stmt = $this->db->prepare("SELECT * FROM students");
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();
		$student_data = $stmt->fetchAll();
		return $student_data;
	}

	// Function for deleting students
	public function delete_student() 
	{  
		$checks = implode("','", $_POST['checkbox']);
		$stmt = $this->db->prepare("DELETE FROM `students` WHERE `student_id` IN ('$checks');");
		$stmt->execute();
		header('location: ' . URL . 'studentController/listing_student');
	}

	// Function for deleting single student through ajax
	public function delete_single_student() 
	{
		$student_id = $_POST['student_id'];
		$stmt = $this->db->prepare('DELETE FROM students WHERE student_id = "'.$student_id.'"');
		$stmt->execute();
	}

	// Function for showing edit student form
	public function edit_student($student_id)
	{
		$stmt = $this->db->prepare('SELECT * FROM students WHERE student_id = "'.$student_id.'"');
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();
		$student_data = $stmt->fetchAll();
		return $student_data;
	}

	// Function for updating student record
	public function update_student() 
	{
		$stmt = $this->db->prepare("UPDATE students SET student_birthday = :student_birthday, 
		student_phone = :student_phone, 
		student_city = :student_city  
		WHERE student_id = :student_id");                                  
		$stmt->bindParam(':student_birthday', $_POST['student_bday'], PDO::PARAM_STR);       
		$stmt->bindParam(':student_phone', $_POST['student_phone'], PDO::PARAM_STR);    
		$stmt->bindParam(':student_city', $_POST['student_city'], PDO::PARAM_STR);
		$stmt->bindParam(':student_id', $_POST['student_id'], PDO::PARAM_STR);  
		$stmt->execute(); 
		header('location: ' . URL . 'studentController/listing_student');
	}
}

?>

 