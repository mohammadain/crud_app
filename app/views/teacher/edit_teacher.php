<h3>Edit teacher</h3>
<p>Teacher ID and teacher name can't be changed</p>
<form action="<?php echo URL . 'teacherController/update_teacher'?>" id="edit_teacher_form" method="POST">
  <div class="form-group">
    <label for="teacher_id">Teacher ID: *</label><span id="span_teacher_id"></span>	
    <input type="text" class="form-control" id="teacher_id" name="teacher_id" value="<?php echo $data[0]['teacher_id']; ?>" required readonly>
  </div>
  <div class="form-group">
    <label for="teacher_name">Teacher Name: *</label>
    <input type="text" class="form-control" id="teacher_name" name="teacher_name" value="<?php echo $data[0]['teacher_name']; ?>" required readonly>
  </div>
    <div class="form-group">
    <label for="teacher_phone">Teacher Phone:</label>
    <input type="text" class="form-control" id="teacher_phone" name="teacher_phone" value="<?php echo $data[0]['teacher_phone']; ?>" >
  </div>
  <div class="form-group">
    <label for="teacher_city">Teacher City:</label>
    <input type="text" class="form-control" id="teacher_city" name="teacher_city" value="<?php echo $data[0]['teacher_city']; ?>" >
  </div>
  <button type="submit" class="btn btn-default">Update</button>
</form>		