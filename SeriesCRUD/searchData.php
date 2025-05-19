<?php
include 'connect.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Search Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>

    <?php
    $data=$_GET['data'];
    
    $sql = "SELECT * FROM `seriescrud` WHERE id = $data";
    $result = mysqli_query($con,$sql);
    if($result){
        $row = mysqli_fetch_assoc($result);
        echo '
            <div class="container">
                <div class="jumbotron">
                    <h1 class="display-4 text-center text-success">'.$row['fname'].'</h1>
                    <p class="lead text-center text-danger">Your Email ID is : '.$row['email'].'</p>
                    <hr class="my-4">
                    <p class="lead">
                        <a class="btn btn-dark btn-lg" href="search.php" role="button">Back</a>
                </p>
            </div>

        </div>';
    }

    ?>

    
</body>
</html>