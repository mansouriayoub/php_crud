<?php $rows = $user->getUsers(); ?>
<?php foreach($rows as $row): ?>
  <tr>
    <th scope="row"><?php echo $row['id']; ?></th>
    <td><?php echo $row['firstName']; ?></td>
    <td><?php echo $row['lastName']; ?></td>
    <td><?php echo $row['age']; ?> years</td>
    <td>
      <a href="form.php?update_id=<?php echo $row['id']; ?>" class="edit btn btn-success">Update</a>
    </td>
    <td>
      <a data-name="<?php echo $row['firstName']; ?>" href="index.php?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger confirmation">Delete</a>
    </td>
  </tr>
<?php endforeach; ?>