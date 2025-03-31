<?php

include 'connect.php'; 
if(isset($_POST['submit'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    //insert query

    $sql ="insert into `seriescrud`(fname,lname,email,mobile) 
    values ('$fname', '$lname' , '$email', '$mobile') ";

    $result = mysqli_query($con,$sql);
    if($result){

        echo "Data Inserted Succesfully";
    }
    else{
        die(mysqli_error(+ $con));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>PHP Crud Series</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
    <div class="mb-3">
        <label class="form-label">First Name</label>
        <input type="text" class="form-control"  placeholder="Enter Your First Name" name ="fname" autocomplete = "off">
    </div>
    <div class="mb-3">
        <label class="form-label">Last Name</label>
        <input type="text" class="form-control"  placeholder="Enter Your Last Name" name ="lname" autocomplete = "off">
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control"  placeholder="Enter Your Email" name ="email" autocomplete = "off">
    </div>
    <div class="mb-3">
        <label class="form-label">Mobile</label>
        <input type="text" class="form-control"  placeholder="Enter Your Mobile" name ="mobile" autocomplete = "off">
    </div>
    <button class="btn btn-dark btn-lg my-3" name ="submit">Submit</button>
    </form>
    </div>

   
  </body>
</html>