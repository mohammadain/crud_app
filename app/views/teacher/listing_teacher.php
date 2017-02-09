
<h3>All teachers</h3>
<p>Following are the listing of all teachers</p>
<form action="delete_teacher" id="delete_teacher" method="POST">
    <table class="table table-bordered">
        <thead>
          <tr>
            <th></th>
            <th>Teacher ID</th>
            <th>Teacher Name</th>
            <th>Teacher Phone</th>
            <th>Teacher City</th>
            <th></th>
          </tr>
        </thead>
    <tbody>
    <?php foreach($data as $key => $row) {?>
      <tr>
        <td> <input name="checkbox[]" type="checkbox" value="<?php echo $row['teacher_id']; ?>"></td>
        <td><?php echo $row['teacher_id']; ?></td>
        <td><?php echo $row['teacher_name']; ?></td>
        <td><?php echo $row['teacher_phone']; ?></td>
        <td><?php echo $row['teacher_city']; ?></td>
        <td>
            <a class="edit" href="<?php echo URL . 'teacherController/edit_teacher/' . $row['teacher_id']; ?>">
                <span class="glyphicon glyphicon-edit"></span>
            </a> 
            | 
            <a class="del" id="<?php echo $row['teacher_id']; ?>"  href="#">
                <span class="glyphicon glyphicon-remove" id="<?php echo $row['teacher_id']; ?>"></span>
            </a>
        </td>
      </tr>
    <?php } ?>
    </tbody>
    </table>
    <button type="Delete" class="btn btn-default">Submit</button>
</form>

 