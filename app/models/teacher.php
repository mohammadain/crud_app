<?php 

// Creating teacher model class  
class teacher extends baseModel
{
	public function __construct()
	{
		parent::__construct();
	}

	// Function for adding teachers
	public function add_teacher_do() 
	{
		$stmt = $this->db->prepare("INSERT INTO teachers (teacher_id, teacher_name, teacher_phone, teacher_city) VALUES (:teacher_id, :teacher_name, :teacher_phone, :teacher_city)");
		$stmt->execute(array(':teacher_id' => $_POST['teacher_id'], ':teacher_name' => $_POST['teacher_name'], ':teacher_phone' => $_POST['teacher_phone'], ':teacher_city' => $_POST['teacher_city']));
		header('location: add_teacher');
	}

	// Function for checking is teacher id exist
	public function check_teacher_form()
	{
		$stmt = $this->db->prepare("SELECT * FROM teachers WHERE teacher_id = :teacher_id;");
		$stmt->execute(array(':teacher_id' => $_POST['teacher_id']));
		return print !!$stmt->fetch(PDO::FETCH_ASSOC);
	}

	// Function for listing teachers
	public function listing_teacher() 
	{  
		$stmt = $this->db->prepare("SELECT * FROM teachers");
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();
		$teacher_data = $stmt->fetchAll();
		return $teacher_data;
	}

	// Function for deleting teachers
	public function delete_teacher() 
	{  
		$checks = implode("','", $_POST['checkbox']);
		$stmt = $this->db->prepare("DELETE FROM teachers WHERE teacher_id IN ('$checks');");
		$stmt->execute();
		header('location: ' . URL . 'teacherController/listing_teacher');
	}

	// Function for deleting single teacher through ajax
	public function delete_single_teacher() 
	{
		$teacher_id = $_POST['teacher_id'];
		$stmt = $this->db->prepare('DELETE FROM teachers WHERE teacher_id = "'.$teacher_id.'"');
		$stmt->execute();
	}

	// Function for showing edit teacher form
	public function edit_teacher($teacher_id)
	{
		$stmt = $this->db->prepare('SELECT * FROM teachers WHERE teacher_id = "'.$teacher_id.'"');
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();
		$teacher_data = $stmt->fetchAll();
		return $teacher_data;
	}

	// Function for updating teacher record
	public function update_teacher() 
	{
		$stmt = $this->db->prepare("UPDATE teachers SET 
		teacher_phone = :teacher_phone, 
		teacher_city = :teacher_city  
		WHERE teacher_id = :teacher_id");                                        
		$stmt->bindParam(':teacher_phone', $_POST['teacher_phone'], PDO::PARAM_STR);    
		$stmt->bindParam(':teacher_city', $_POST['teacher_city'], PDO::PARAM_STR);
		$stmt->bindParam(':teacher_id', $_POST['teacher_id'], PDO::PARAM_STR);  
		$stmt->execute(); 
		header('location: ' . URL . 'teacherController/listing_teacher');
	}
}

?>

 