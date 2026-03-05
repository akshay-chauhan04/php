<?php
include "db.php";

 $result = mysqli_query($conn,"SELECT * FROM project1");

  if (!$result) {
    die("Query failed: " . mysqli_error($conn));
  }
?>



<!DOCTYPE html>
<html>
<head>
  <title>Dashboard - Users</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="sidebar">
  <h2>Dashboard</h2>
  <a href="index.php">Home</a>
  <a href="form.php">Form</a>
  <a href="users.php">Users</a>
</div>

<div class="main">
  <div class="card">
    <h2>User List</h2>
    <table>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Time</th>
        <th>operations</th>
      </tr>
     

  <?php
  
    while ($row = mysqli_fetch_assoc($result)) {
      echo" <tr>
         <td>{$row['id']}</td>
         <td>{$row['name']}</td>
         <td>{$row['email']}</td>
         <td>{$row['role']}</td>
         <td>{$row['date']}</td>
         <td>
         <a href='delete.php?id={$row['id']}''>Delete</a>
         <a href='update.php?id={$row['id']}''>EDIT</a>
         </td>
         
      </tr>";
    }
  ?>
    </table>
  </div>
</div>

</body>
</html>