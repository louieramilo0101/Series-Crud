<?php
include 'connect.php';


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Display Data</title>
  </head>
  <body>
   <div class="container my-5">
   <table class="table">
  <thead>
    <tr>
      <th scope="col">Serial Number</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Subjects</th>
      <th scope="col">Operations</th>
    </tr>

  </thead>
  <tbody>
<?php
//Select Query
$sql = "SELECT * FROM `seriescrud`";
$result = mysqli_query($con,$sql);
while( $row = mysqli_fetch_array($result) ){

    $id = $row['id'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $datas=    $row['multipleData']; // Get checkbox values

    echo ' 
    <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$fname.'</td>
      <td>'.$lname.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>'.$datas.'</td>
      <td>
    <a href="update.php?updateid='.$id.' " class= "btn btn-dark"> Update</a>
    <a href="delete.php?deleteid='.$id.' " class= "btn btn-danger"> Delete</a>
   </td>
    </tr>
    
    ';
}


?>
   
   

  </tbody>
</table>

   </div>

    
  </body>
</html>