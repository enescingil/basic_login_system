<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login System </title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
	<nav>
		<ul>
			<li><a href="index.php">HOME</a></li>
			<?php
				if(isset($_SESSION['id'])) {
					echo "<form action='include/logout.inc.php' method='POST'>
							<button type='submit'>Log Out</button>
						</form>";
				}else {
					echo "<form action='include/login.inc.php' method='POST'>
					<input type='text' name='uid' placeholder='Username'>
					<input type='password'name='pwd' placeholder='Password'>
					<button type='submit'>Login</button>
				</form>";
				}
			?>
			<li><a href="signup.php">SIGN UP</a></li>
		</ul>
	</nav>
</header>