<?php
include "db.php";

$id = $_GET['id'];

$sql = "SELECT * FROM `project1` WHERE id = $id";
$result = mysqli_query($conn,$sql);
if ($row = mysqli_fetch_assoc($result)) {
    $name = $row['name'];
    $email = $row['email'];
    $role = $row['role'];
    $id = $row['id'];
}else{
    echo 'error';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        body{
            height:100vh;
            display: flex;
            justify-content:center;
            align-items:center;
        }
        .main{
            height:500px;
            width:500px;
            margin-right:150px;
            display: flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;

        }
        button{
            width: 600px;
            text-align:center;
        }
    </style>
</head>
<body>
    <div class="main">
         <form method="POST">
      <label>Name</label>
      <input type="text" placeholder="Enter Name" name="name" value="<?php echo $name ?>">
      <input type="hidden" placeholder="Enter Name" name="id" value="<?php echo $id ?>">

      <label>Email</label>
      <input type="email" placeholder="Enter Email" name="email" value="<?php echo $email  ?>">

     <label>Role</label>
    <select name="role">
      <option value="Admin" <?php if($role=='Admin') echo 'selected'; ?>>Admin</option>
      <option value="User" <?php if($role=='User') echo 'selected'; ?>>User</option>
    </select>
      <button type="submit" name="update" value="update">UPDATE</button>
    </form>

    </div>
</body>
</html>

<?php

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $id = $_POST['id'];

$query = "UPDATE `project1` SET `id`='$id',`name`='$name',`email`='$email',`role`='$role' WHERE id = $id";

  $result = mysqli_query($conn ,$query);

   if ($result) {
      header("location:user.php");
   }else{
     echo"do not update";
   }
}

?>