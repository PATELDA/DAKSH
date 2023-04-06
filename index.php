<?php 
 $message=(!isset($_GET["message"]) || $_GET["message"] == '') ? "" : $_GET["message"];
 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div style="margin-top:140px;">
		<form action="form_action/login.php" method="post">
			  <h2>Login Form</h2>
			  	<?php
		           if($message != ''){
		              echo "<div class='text-center bg-red p-10 m-10'>".$message."</div>";
		           }
				?>
			  <label for="username"><b>UserEmail:</b></label>
			  <input type="email" id="userEmail" name="userEmail" required>
			  <label for="password"><b>Password:</b></label>
			  <input type="password" id="password" name="password" required>
			  <input type="submit" value="Login">
		</form>
	</div>
</body>
</html>