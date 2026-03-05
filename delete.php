<?php
include "db.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];


$result = mysqli_query($conn ,"DELETE FROM project1 WHERE id=$id");

    if($result){                     
        header("Location: user.php"); 
        exit;
    } else {
        echo "Failed to delete record."; 
    }

}else{
    echo"NO ID Provide";
}


?>