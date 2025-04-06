<?php

include 'connect.php';
if (isset($_POST['submit'])) {
   
    $data=$_POST['data'];
    $allData = implode(", ", $data); 
    echo $allData;
   
    $sql = "INSERT INTO `multipledata` (`checkBoxData`) VALUES ('$allData')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . mysqli_error($con);
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Multiple Checkbox Data</title>
</head>

<body>

    <div class="container my-5">
        <form method="post">

            <div class="input-group-text">
                <input type="checkbox" name="data[]" value="JavaScript">JavaScript
            </div>
            <div class="input-group-text  my-3">
                <input type="checkbox" name="data[]" value="React">React
            </div>
            <div class="input-group-text my-3">
                <input type="checkbox" name="data[]" value="HTML">HTML
            </div>  
            <div class="input-group-text my-3">
                <input type="checkbox" name="data[]" value="CSS">CSS
            </div>
            <button class="btn btn-dark my-3" name="submit" type ="submit">Submit</button>

        </form>

    </div>


</body>

</html>