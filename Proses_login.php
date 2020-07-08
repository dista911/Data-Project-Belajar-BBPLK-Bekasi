<!DOCTYPE html>
<html>
<head>
	<title>Proses Login</title>
</head>
<body>
	<?php
	$username=$_POST['uname'];
	$password=$_POST['pswd'];
	if($username == "dista"){
		if($password == "asdfg"){
			echo "Berhasil Login";
		}else{
			echo "Password Salah";
		}
	}else{
		echo "Username Salah";
	}
	?>
</body>
</html>