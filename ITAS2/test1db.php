<?php

$conn = mysqli_connect("localhost","root", "", "test1login");

if(!$conn) {
	die("Connection Failed: ".mysqli_connect_error());
}

?>