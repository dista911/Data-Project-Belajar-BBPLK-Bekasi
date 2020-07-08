<!DOCTYPE html>
<html>
<head>
	<title>Pembayaran</title>
</head>
<body>
	<?php
	$bayar=$_POST['bayar'];
	$totalharga=$_COOKIE['totalharga'];
	$kembali=number_format($bayar-$totalharga,0,"'",".");
	$grandtotal=$_POST['grandtotal'];

	if($bayar>$grandtotal){
		echo "<script>alert('Terima kasih, uang kembali Anda sebesar Rp. $kembali');</script>";
		echo "<script>window.location.assign('FormPenjualan.php')</script>";
	}elseif($bayar<$grandtotal){
		echo "<script>alert('Maaf, uang Anda kurang');</script>";
		echo "<script>window.history.back()</script>";
	}else{
		echo "<script>alert('Terima Kasih');</script>";
		echo "<script>window.location.assign('FormPenjualan.php')</script>";
	}
	?>
</body>
</html>