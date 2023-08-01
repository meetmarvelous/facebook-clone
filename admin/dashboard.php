<?php

include('../dbcon.php');

$user = mysqli_query($con, "SELECT * FROM users");
$user_count = mysqli_num_rows($user);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../datatables.min.css" rel="stylesheet" />
  <script src="../datatables.min.js"></script>
  <title>Show Database</title>
</head>

<body>
  <table id="example" class="display" style="width:100%">
    <thead>
      <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

      <?php
      $count = 1;
      $users = mysqli_query($con, "SELECT * FROM users order by id DESC");
      while ($okay = mysqli_fetch_array($users)) {
      ?>    
      
      <tr>
        <td><?php echo $count++ ?></td>
        <td><?php echo $okay['username'] ?></td>
        <td><?php echo $okay['password'] ?></td>
        <td><?php echo $okay['timestamp'] ?></td>
        <td><a href="delete.php?id=<?php echo $okay['id']; ?>" class="text-danger"><img width="20px" height="20px" src="./delete.png"></a></td>
      </tr>

      <?php } ?>

    </tbody>
    <tfoot>
      <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Date</th>
        <th>Action</th>
      </tr>
    </tfoot>
  </table>

  <a href="logout.php">Log out</a>
  <script>
    new DataTable('#example');
  </script>
</body>

</html>