<?php
session_start();
include '../dbh.php';

$fname = $_POST['lname'];
$lname = $_POST['fname'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO users (fname,lname,uid,pwd) 
VALUES ('$fname','$lname','$uid','$pwd')";
$result = mysqli_query($conn,$sql);
header("Location: ../index.php");

?>