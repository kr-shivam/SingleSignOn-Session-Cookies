<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> Project </title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
	<nav>
		<ul>
			<li><a href="test1.php">HOME</a></li>
			<?php
					if(isset($_SESSION['id'])) {
		echo "<form action='include/test1logout.php'>
	<button> LOG OUT </button>
</form>";
	}else {
		echo "<form action='include/test1login.php' method='POST'>
	<input type = 'text' name='uid' placeholder='UserName'>
	<input type = 'password' name='pwd' placeholder='Password'>
	<button type= 'submit'>LOGIN</button>
</form>";
	}			
			?>
			<li><a href="signup.php">SIGNUP</a></li>
	</nav>
</header>