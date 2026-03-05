<?php

include "db.php";

if (isset( $_POST['name']) && isset( $_POST['email']) && isset( $_POST['role'])) {
    
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$select = trim($_POST['role']);

 if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
     echo"invalid email!";
     exit;
 }

 $data =$conn->prepare("INSERT INTO `project1`(`name`, `email`, `role`) VALUES (?,?,?)");
  $data->bind_param('sss',$name, $email, $select);
  
 if ($data->execute()) {
   header("Location: user.php");
  exit;
 }else{
    echo"error"; $conn->error;
 }

  $conn->close();
  $data->close();

}


?>