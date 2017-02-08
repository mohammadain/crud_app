
<h3>All students</h3>
<p>Following are the listing of all students</p>
<form action="delete_student" id="delete_student" method="POST">
 <table class="table table-bordered">
    <thead>
      <tr>
        <th></th>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Student Phone</th>
        <th>Birthday</th>
        <th>Student City</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($data as $key => $row) {?>
      <tr>
        <td> <input name="checkbox[]" type="checkbox" value="<?php echo $row['student_id']; ?>"></td>
        <td><?php echo $row['student_id']; ?></td>
        <td><?php echo $row['student_name']; ?></td>
        <td><?php echo $row['student_birthday']; ?></td>
        <td><?php echo $row['student_phone']; ?></td>
        <td><?php echo $row['student_city']; ?></td>
        <td><span class="glyphicon glyphicon-edit" id="<?php echo $row['student_id']; ?>"></span> | <span class="glyphicon glyphicon-remove" id="<?php echo $row['student_id']; ?>"></span></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
<button type="submit" class="btn btn-default">Submit</button>
</form>

 