<?php

include 'connect.php';   

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

</head>
<body>
    
    <div class="container my-5">
        <table class="table">
  <thead class="bg-dark text-light">
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Mobile</th>
    </tr>
  </thead>

  <tbody>
    <?php

    $sql = "SELECT * FROM `seriescrud`";// i did remove the limit from here because it doesnt work if the limit is here
    $result = mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);
    $numberPages = 3;
    $totalPages = ceil($num/$numberPages);
    //echo $totalPages;
    //Creating Pagination Buttons
    for($btn = 1 ; $btn <= $totalPages; $btn++){
      echo '<button class = "btn btn-dark mb-3 mx-1"> <a href = "pagination.php?page='.$btn.'" class ="text-light">
      '.$btn.'</a></button>';
    }

    if(isset($_GET['page'])){
        $page = $_GET['page'];
       // echo $page;
    }else{
        $page = 1;
    }
    //1-----> 0,5
    //2-----> 5,5
    //3-----> 10,5
    //(pnumber-1)*$numberPages
    $startinglimit = ($page-1)*$numberPages;
    $sql = "SELECT * FROM `seriescrud` limit " .$startinglimit.','.$numberPages.'';
    $result = mysqli_query($con,$sql);

    //echo $num;
    while($row=mysqli_fetch_assoc($result)){
        
        echo '<tr>
          <th scope="row">'.$row['id'].'</th>
          <td>'.$row['fname'].'</td>
          <td>'.$row['lname'].'</td>
          <td>'.$row['mobile'].'</td>
          </tr>';
    }
    ?>
    
    
  </tbody>
</table>
    </div>
</body>
</html>