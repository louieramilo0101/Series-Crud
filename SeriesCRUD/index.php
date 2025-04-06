<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $fname =    $_POST['fname'];
    $lname =    $_POST['lname'];
    $email =    $_POST['email'];
    $mobile =   $_POST['mobile'];
    $datas=     $_POST['data']; // Get checkbox values
    $allData = implode(", ", $datas); // Combine checkbox values into a string

    $sql = "INSERT INTO `seriescrud`(fname, lname,email, mobile, multipleData) 
    VALUES ('$fname','$lname','$email','$mobile', '$allData')";

    $result = mysqli_query($con,$sql);

    if($result){
       header('location:read.php');
    }else{
        die(mysqli_error( $con));
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <title>PHP CRUD Series</title>
</head>

<body>
    <div class="container my-5">
        <form method="POST">
        <div class="mb-3">
            <label  class="form-label">First Name</label>
            <input type="text" class="form-control" 
            placeholder="Enter your first name" name="fname" autocomplete="off">
        </div>
        <div class="mb-3">
            <label  class="form-label">Last Name</label>
            <input type="text" class="form-control" 
            placeholder="Enter your Last name" name="lname" autocomplete="off">
        </div>
        <div class="mb-3">
            <label  class="form-label">Email</label>
            <input type="email" class="form-control" 
            placeholder="Enter your Email" name="email" autocomplete="off">
        </div>
        <div class="mb-3">
            <label  class="form-label">Mobile</label>
            <input type="text" class="form-control" 
            placeholder="Enter your Mobile" name="mobile" autocomplete="off">
        </div>

        <div>

            <input type="checkbox" name="data[]" value="JavaScript">JavaScript
            <input type="checkbox" name="data[]" value="React">React
            <input type="checkbox" name="data[]" value="HTML">HTML
            <input type="checkbox" name="data[]" value="CSS">CSS

        </div>
        <button class="btn btn-dark btn-lg my-3" name="submit">Sumbit</button>

        </form>

    </div>


</body>

</html>