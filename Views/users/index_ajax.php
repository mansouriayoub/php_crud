<?php
  set_include_path($_SERVER['DOCUMENT_ROOT'].'/PHP_courses/inventory'); 

include 'Models/User.php'; 
$user = new User(); 

?>
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Age</th>
      <th class="actions"><a href="form.php" class="edit btn btn-info">Add New User</a></th>
    </tr>
  </thead>
  <tbody >
    <?php $rows = $user->getUsers(); ?>
    <?php foreach($rows as $row): ?>
      <tr>
        <th scope="row"><?php echo $row['id']; ?></th>
        <td><?php echo $row['firstName']; ?></td>
        <td><?php echo $row['lastName']; ?></td>
        <td><?php echo $row['age']; ?> years</td>
        <td class="actions">
          <a href="form.php?update_id=<?php echo $row['id']; ?>" class="edit btn btn-success">Update</a>
          <a data-name="<?php echo $row['firstName']; ?>" href="index.php?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger confirmation">Delete</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>