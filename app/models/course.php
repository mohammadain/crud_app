<?php 

// Creating course model class  
class course extends baseModel
{
	public function __construct()
	{
		parent::__construct();
	}

	// Function for adding courses
	public function add_course_do() 
	{
		$stmt = $this->db->prepare("INSERT INTO courses (course_id, course_name, course_des) VALUES (:course_id, :course_name, :course_des)");
		$stmt->execute(array(':course_id' => $_POST['course_id'], ':course_name' => $_POST['course_name'], ':course_des' => $_POST['course_des']));
		header('location: add_course');
	}

	// Function for checking is course id exist
	public function check_course_form()
	{
		$stmt = $this->db->prepare("SELECT * FROM courses WHERE course_id = :course_id;");
		$stmt->execute(array(':course_id' => $_POST['course_id']));
		return print !!$stmt->fetch(PDO::FETCH_ASSOC);
	}

	// Function for listing courses
	public function listing_course() 
	{  
		$stmt = $this->db->prepare("SELECT * FROM courses");
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();
		$course_data = $stmt->fetchAll();
		return $course_data;
	}

	// Function for deleting courses
	public function delete_course() 
	{  
		$checks = implode("','", $_POST['checkbox']);
		$stmt = $this->db->prepare("DELETE FROM courses WHERE course_id IN ('$checks');");
		$stmt->execute();
		header('location: ' . URL . 'courseController/listing_course');
	}

	// Function for deleting single course through ajax
	public function delete_single_course() 
	{
		$course_id = $_POST['course_id'];
		$stmt = $this->db->prepare('DELETE FROM courses WHERE course_id = "'.$course_id.'"');
		$stmt->execute();
	}

	// Function for showing edit course form
	public function edit_course($course_id)
	{
		$stmt = $this->db->prepare('SELECT * FROM courses WHERE course_id = "'.$course_id.'"');
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();
		$course_data = $stmt->fetchAll();
		return $course_data;
	}

	// Function for updating course record
	public function update_course() 
	{
		$stmt = $this->db->prepare("UPDATE courses SET 
		course_des = :course_des 
		WHERE course_id = :course_id");                                        
		$stmt->bindParam(':course_des', $_POST['course_des'], PDO::PARAM_STR);    
		$stmt->bindParam(':course_id', $_POST['course_id'], PDO::PARAM_STR);  
		$stmt->execute(); 
		header('location: ' . URL . 'courseController/listing_course');
	}
}

?>

 