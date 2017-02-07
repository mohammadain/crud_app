<h3>Add a student</h3>
<p>To add a student please fill up the following fields</p>
<form action="add_student_do" method="POST">
  <div class="form-group">
    <label for="student_id">Student ID: *</label>
    <input type="text" class="form-control" id="student_id" name="student_id" required>
  </div>
  <div class="form-group">
    <label for="student_name">Student Name: *</label>
    <input type="text" class="form-control" id="student_name" name="student_name" required>
  </div>
   <div class="form-group">
    <label for="bday">Birthday:</label>
    <input type="date" class="form-control" id="student_bday" name="student_bday" >
</div>

 
    <div class="form-group">
    <label for="student_phone">Student Phone:</label>
    <input type="text" class="form-control" id="student_phone" name="student_phone" >
  </div>
  <div class="form-group">
    <label for="student_city">Student City:</label>
    <input type="text" class="form-control" id="student_city" name="student_city">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>		


