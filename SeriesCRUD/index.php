<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $fname =    $_POST['fname'];
    $lname =    $_POST['lname'];
    $email =    $_POST['email'];
    $mobile =   $_POST['mobile'];
    $datas=     $_POST['data']; // Get checkbox values
    $allData = implode(", ", $datas); // Combine checkbox values into a string
    $gender =$_POST['gender'];
    $place=$_POST['place'];

    $sql = "INSERT INTO `seriescrud`(fname, lname,email, mobile, multipleData,gender, place) 
    VALUES ('$fname','$lname','$email','$mobile', '$allData', '$gender', '$place')";

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

        <div class="my-3">
            Gender:
            <input type="radio" name ="gender" value="male">Male
            <input type="radio" name ="gender" value="female">Female    
            <input type="radio" name ="gender" value="kids">Kids
        </div>

        <div>

                <select name="place">
                    <option value="banglore">Banglore</option>            
                    <option value="kolkata">Kolkata</option>
                    <option value="Mysore">Mysore</option>
                    <option value="Mumbai">Mumbai</option>
                </select>

            </div>
            <div class="my-5">                
                <button class="btn btn-dark btn-lg my-5" name="submit">Sumbit</button>
            </div>
        </form>

    </div>


</body>

</html>