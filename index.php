<?php
	$mysqli=new mysqli("localhost","root","","user_registration");
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$username = $_POST["username"];
		$password = $_POST["password"];
		$query = mysqli_query($mysqli,"SELECT * FROM users WHERE username='".$username."' AND password='".$password."'");
		$numrows = mysqli_num_rows($query);
		if($numrows>=1){
			echo 'Login successfull!!!';
		}
		else{
			echo 'login failed!!!!';
		}
	}
?>

<html>
	<head>
		<title>Index</title>
	</head>
		
	<body>
		<form action="index.php" method="post">
			<input type="text" name="username" placeholder="username" required/>
			<input type="password" name="password" placeholder="password" required/>
			<input type="submit" value="submit"/>
		</form>
	</body>
</html>
