
<h3>All courses</h3>
<p>Following are the listing of all courses</p>
<form action="delete_course" id="delete_course" method="POST">
    <table class="table table-bordered">
        <thead>
          <tr>
            <th></th>
            <th>Course ID</th>
            <th>Course Name</th>
            <th>Course Description</th>
            <th></th>
          </tr>
        </thead>
    <tbody>
    <?php foreach($data as $key => $row) {?>
      <tr>
        <td> <input name="checkbox[]" type="checkbox" value="<?php echo $row['course_id']; ?>"></td>
        <td><?php echo $row['course_id']; ?></td>
        <td><?php echo $row['course_name']; ?></td>
        <td><?php echo $row['course_des']; ?></td>
        <td>
            <a class="edit" href="<?php echo URL . 'courseController/edit_course/' . $row['course_id']; ?>">
                <span class="glyphicon glyphicon-edit"></span>
            </a> 
            | 
            <a class="del" id="<?php echo $row['course_id']; ?>"  href="#">
                <span class="glyphicon glyphicon-remove" id="<?php echo $row['course_id']; ?>"></span>
            </a>
        </td>
      </tr>
    <?php } ?>
    </tbody>
    </table>
    <button type="Delete" class="btn btn-default">Submit</button>
</form>

 