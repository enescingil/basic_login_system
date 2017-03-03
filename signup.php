<?php 
include "header.php"; 
?>

<?php
	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	if(strpos($url, 'error=empty') !== false){
		echo "Please fill out all the fields!";
	}
	elseif(strpos($url, 'error=username') !== false){
		echo "Username is already exist!";
	}

	if(isset($_SESSION['id'])) {
		echo $_SESSION['id'];
	}else {
		echo "You are not logged in!";
	}
?>

<?php
	if(isset($_SESSION['id'])) {
		echo "<h1>You are logged in!</h1>";
	}else {
		echo "<form action='include/signup.inc.php' method='POST'>
			<input class= 'form-input' type='text' name='first' placeholder='Firstname'><br>
			<input class= 'form-input' type='text' name='last' placeholder='Lastname'><br>
			<input class= 'form-input' type='text' name='uid' placeholder='Username'><br>
			<input class= 'form-input' type='password' name='pwd' placeholder='Password'><br>
			<button type='submit'>Sign Up</button>
		</form>";
	}
?>
</body>
</html>