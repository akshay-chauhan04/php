<!DOCTYPE html>
<html>
<head>
  <title>Dashboard - Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="sidebar">
  <h2>Dashboard</h2>
  <a href="index.php">Home</a>
  <a href="form.php">Form</a>
  <a href="user.php">Users</a>
</div>

<div class="main">
  <div class="card">
    <h2>User Form</h2>
    <form action="insertdata.php" method="post">
      <label>Name</label>
      <input type="text" placeholder="Enter Name" name="name">

      <label>Email</label>
      <input type="email" placeholder="Enter Email" name="email">

      <label>Role</label>
      <select name="role">
        <option>Admin</option>
        <option>User</option>
      </select>

      <button type="submit">Submit</button>
    </form>
  </div>
</div>

</body>
</html>

<?php