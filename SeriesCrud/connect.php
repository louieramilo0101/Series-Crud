<?php
$con = mysqli_connect('localhost', 'root','','crudseries' );

if(!$con){
    die(mysqli_error("Error" + $con));
}

?>