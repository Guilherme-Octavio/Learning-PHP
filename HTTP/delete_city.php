<?php
include 'connect.php';
include 'checklogin.php';

$sq="delete from city where idCity='$id'";
mysqli_query($con,$sq);
header('location:city.php');
?>