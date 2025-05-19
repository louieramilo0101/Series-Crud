<?php
include 'connect.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

</head>
<body>
    
<div class="container my-5">
    <form method="post">
        <input type="text" placeholder="Search data" name="search">
        <button class="btn btn-dark btn-sm" name ="submit">Search</button>
    </form>
    <div class="container my-5">
        <table class="table">
            <?php
            if(isset($_POST['submit'])) {
                $search=$_POST['search'];
                
                $sql = "SELECT * FROM `seriescrud` WHERE id LIKE '%$search%' OR fname LIKE '%$search%' OR 
                lname LIKE '%$search%'";
                $result = mysqli_query($con,$sql);
                if($result){
                    if(mysqli_num_rows($result)>0){
                        echo '<thead>
                            <tr>
                            <th>Sl no</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            </tr>
                            </thead>
                        ';
                        
                        while($row=mysqli_fetch_assoc($result)){
                        echo '<tbody>
                            <tr>
                                <td><a href="searchData.php?data='.$row['id'].'">'.$row['id'].'</a></td>
                                <td>'.$row['fname'].'</td>
                                <td>'.$row['lname'].'</td>      
                            </tr>
                        </tbody>';
                        }
                    }else{
                        echo "<h2 class=text-danger>Data not found</h2>";
                    }
                }
            }
            ?>

        </table>
    </div>
</div>
</body>
</html>