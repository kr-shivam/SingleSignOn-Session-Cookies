<?php
session_start();
include '../test1db.php';

$first=$_POST['fname'];
$last=$_POST['lname'];
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];

$sql= "INSERT INTO user (fname, lname, uid, pwd) VALUES ('$first', '$last', '$uid', '$pwd')";
$result= mysqli_query($conn,$sql);

header("Location: ../test1.php");
?>
