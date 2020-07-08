<!DOCTYPE html>
<html>
<head>
	<title>For Loop</title>
</head>
<body>
	<?php
	/*for($i=1;$i<=10;$i++){ 
		echo "*";
	}*/
	/*for($i=1;$i<=5;$i++){
		for($a=1;$a<=$i;$a++){ 
			echo"*";
		}echo"<br>";
	}*/
	$nmbr=$_POST['number'];
	for($i=1;$i<=$nmbr;$i++){
		for($a=1;$a<=$i;$a++){ 
			echo"*";
		}echo"<br>";
	}
	?>
	<a href="FormNumber.php">Back</a>
</body>
</html>