<?php
include '../connect.php';
include '../checklogin.php';

$id = $_GET['id'];

$sq="delete from city where idCity=$id";
mysqli_query($con,$sq);
header('location:city.php');
?>