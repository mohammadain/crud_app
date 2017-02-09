<h3>Add a course</h3>
<p>To add a course please fill up the following fields</p>
<form action="<?php echo URL;?>courseController/add_course_do" id="add_course_form" method="POST">
  <div class="form-group">
    <label for="course_id">Course ID: *</label><span id="span_course_id"></span>	
    <input type="text" class="form-control" id="course_id" name="course_id" required>
  </div>
  <div class="form-group">
    <label for="course_name">Course Name: *</label>
    <input type="text" class="form-control" id="course_name" name="course_name" required>
  </div> 
    <div class="form-group">
    <label for="course_des">Course Description:</label>
    <input type="text" class="form-control" id="course_des" name="course_des" >
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>		


