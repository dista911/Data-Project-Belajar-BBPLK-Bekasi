<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
	<form action="Proses_login.php" method="post" class="ml-4">
		<div class="form-group mt-3">
    		<input type="text" placeholder="Username" name="uname" required>
  		</div>
  		<div class="form-group">
    		<input type="password" placeholder="Password" name="pswd" required>
  		</div>
  		<button type="submit" class="btn btn-primary">Login</button>
	</form>
</body>
</html>