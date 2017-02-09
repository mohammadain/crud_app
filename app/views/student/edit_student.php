<h3>Edit student</h3>
<p>Student ID and Student name can't be changed</p>
<form action="<?php echo URL . 'studentController/update_student'?>" id="edit_student_form" method="POST">
  <div class="form-group">
    <label for="student_id">Student ID: *</label><span id="span_student_id"></span>	
    <input type="text" class="form-control" id="student_id" name="student_id" value="<?php echo $data[0]['student_id']; ?>" required readonly>
  </div>
  <div class="form-group">
    <label for="student_name">Student Name: *</label>
    <input type="text" class="form-control" id="student_name" name="student_name" value="<?php echo $data[0]['student_name']; ?>" required readonly>
  </div>
   <div class="form-group">
    <label for="bday">Birthday:</label>
    <input type="date" class="form-control" id="student_bday" name="student_bday" value="<?php echo $data[0]['student_birthday']; ?>" >
</div>
    <div class="form-group">
    <label for="student_phone">Student Phone:</label>
    <input type="text" class="form-control" id="student_phone" name="student_phone" value="<?php echo $data[0]['student_phone']; ?>" >
  </div>
  <div class="form-group">
    <label for="student_city">Student City:</label>
    <input type="text" class="form-control" id="student_city" name="student_city" value="<?php echo $data[0]['student_city']; ?>" >
  </div>
  <button type="Update" class="btn btn-default">Submit</button>
</form>		