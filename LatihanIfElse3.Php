<!DOCTYPE html>
<html>
<head>
	<title>If Else</title>
</head>
<body>
	<?php
	$a=$_POST['number'];
	/*if($a<10) {
		echo "Variabel a lebih kecil dari 10";
	} else {
		echo "Variabel a lebih besar dari 10";
	}*/
	if($a>"80") {
		echo "Grade A";
	}elseif($a>70) {
		echo "Grade B";
	}elseif($a>50) {
		echo "Grade C";
	}else{
		echo "Grade D";
	}
	?>
	<a href="LatihanForm.php">Kembali</a>
</body>
</html>