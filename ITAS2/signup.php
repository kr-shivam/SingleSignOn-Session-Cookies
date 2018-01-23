<?php

include 'header.php';
?>


<?php
	if(isset($_SESSION['id'])) {
		echo $_SESSION['id'];
	}else {
		echo "You are not logged in";
	}
?>
<br><br><br>

<?php

		if(isset($_SESSION['id'])) {
		echo "You are already logged in";
	}else {
		echo "<form action='include/test1signup.php' method='POST'>
	<input type = 'text' name='fname' placeholder='First Name'><br>
	<input type = 'text' name='lname' placeholder='Last Name'><br>
	<input type = 'text' name='uid' placeholder='UserName'><br>
	<input type = 'password' name='pwd' placeholder='Password'><br>
	<button type='submit'>SIGN UP</button>
</form>";
	}
	
?>



</body>
</html>
	