<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $place=$_POST['place'];

    $sql="insert into `selectdata` (place) values ('$place')";
    $result=mysqli_query($con,$sql);

    if($result){
        echo "Data inserted successfully";
    } else{
        die(mysqli_error($con));
    }
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Option Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container my-5">
        <form method="post">
            <div>
                <select name="place">
                    <option value="banglore">Banglore</option>            
                    <option value="kolkata">Kolkata</option>
                    <option value="Mysore">Mysore</option>
                    <option value="Mumbai">Mumbai</option>
                </select>

            </div>
            <div class="my-5">
                <button type="submit" name="submit" class="btn btn-dark my-5 mx-5 ">Submit</button>
            </div>
        </form>
       
  </div>
</body>
</html>