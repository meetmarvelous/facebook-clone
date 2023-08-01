<?php
include('../dbcon.php');

$getid = $_GET['id'];

mysqli_query($con,"DELETE FROM users where id ='$getid'");
header("location: dashboard.php");
echo "<script>window.alert('successfully deleted'); window.location='dashboard.php';<script>";
?>