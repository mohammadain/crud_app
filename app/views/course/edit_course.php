<h3>Edit course</h3>
<p>Course ID and Course name can't be changed</p>
<form action="<?php echo URL . 'courseController/update_course'?>" id="edit_course_form" method="POST">
  <div class="form-group">
    <label for="course_id">course ID: *</label><span id="span_course_id"></span>	
    <input type="text" class="form-control" id="course_id" name="course_id" value="<?php echo $data[0]['course_id']; ?>" required readonly>
  </div>
  <div class="form-group">
    <label for="course_name">course Name: *</label>
    <input type="text" class="form-control" id="course_name" name="course_name" value="<?php echo $data[0]['course_name']; ?>" required readonly>
  </div>
    <div class="form-group">
    <label for="course_des">course Course:</label>
    <input type="text" class="form-control" id="course_des" name="course_des" value="<?php echo $data[0]['course_phone']; ?>" >
  </div>
  <button type="submit" class="btn btn-default">Update</button>
</form>		