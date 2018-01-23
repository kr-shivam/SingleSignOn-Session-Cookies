<?php
session_start();
include '../test1db.php';


$uid=$_POST['uid'];
$pwd=$_POST['pwd'];

$sql= "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
$result= mysqli_query($conn,$sql);

if(!$row = mysqli_fetch_assoc($result)) {
	echo "Username or Password incorrect";
} else {
	$_SESSION['id'] = $row['id'];
	
}

header("Location: ../test1.php");
?>