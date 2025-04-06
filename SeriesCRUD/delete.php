<?php

include 'connect.php';
$id = $_GET['deleteid'];

$sql = "DELETE FROM `seriescrud` WHERE id = $id"; 
$result = mysqli_query($con, $sql);
if($result){
    //echo "Deleted Successfully";
    header("location:read.php");
} else {   
    die(mysqli_error($con));
}

?>