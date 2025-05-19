<?php

include 'connect.php';
$id = $_GET['updateid'];
$sql = "SELECT * FROM `seriescrud` WHERE id = $id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
    $fname = $row['fname'];
    $lname = $row['lname'];
    $email = $row['email'];
    $mobile = $row['mobile'];   
    $datas= $row['multipleData'];
    $gender =$row['gender'];
    $place = $row['place']; 
   
    if(isset($_POST['update'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile']; 
    $datas= $_POST['data']; // Get checkbox values
    $gender = $_POST['gender'];
    $allData = implode(", ", $datas);
    $place = $_POST['place'];
   

    $sql = "UPDATE `seriescrud` SET fname = '$fname', lname = '$lname', email = '$email',
    mobile = '$mobile', multipleData = '$allData', gender = '$gender', place = '$place' WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    if($result){
        header("location:read.php");
       //echo " Updated Sucesfully";
    }else{
        die(mysqli_die($con));
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Update Data</title>
</head>

<body>
    <div class="container my-5">
        <form method="POST">

            <form>
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" autocomplete="off" name="fname" value="<?php echo $fname; ?>">

                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" autocomplete="off" name="lname" value="<?php echo $lname; ?>">

                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" autocomplete="off" name="email" value="<?php echo $email; ?>">

                </div>

                <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" class="form-control" autocomplete="off" name="mobile" value="<?php echo $mobile; ?>">

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
                            <option value="kolkata">Kolkata</opt>
                            <option value="Mysore">Mysore</option>
                            <option value="Mumbai">Mumbai</option>
                        </select>
                    </div>
                    <div class="my-5"> 
                        <button type="submit" class="btn btn-dark brn-lg my-3" name="update">Update</button>
                    </div>
            </form>


        </form>


    </div>


</body>

</html>