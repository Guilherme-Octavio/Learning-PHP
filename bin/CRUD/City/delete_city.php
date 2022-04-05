<?php
include '../connect.php';
include '../checklogin.php';

$sq="delete from city where idCity=" . $_GET['id'];
mysqli_query($con,$sq);
header('location:city.php');
?>