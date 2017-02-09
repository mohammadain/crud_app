<h3>Add a teacher</h3>
<p>To add a teacher please fill up the following fields</p>
<form action="<?php echo URL;?>teacherController/add_teacher_do" id="add_teacher_form" method="POST">
  <div class="form-group">
    <label for="teacher_id">Teacher ID: *</label><span id="span_teacher_id"></span>	
    <input type="text" class="form-control" id="teacher_id" name="teacher_id" required>
  </div>
  <div class="form-group">
    <label for="teacher_name">Teacher Name: *</label>
    <input type="text" class="form-control" id="teacher_name" name="teacher_name" required>
  </div> 
    <div class="form-group">
    <label for="teacher_phone">Teacher Phone:</label>
    <input type="text" class="form-control" id="teacher_phone" name="teacher_phone" >
  </div>
  <div class="form-group">
    <label for="teacher_city">Teacher City:</label>
    <input type="text" class="form-control" id="teacher_city" name="teacher_city">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>		


