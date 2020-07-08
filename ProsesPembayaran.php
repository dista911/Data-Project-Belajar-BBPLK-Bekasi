<!DOCTYPE html>
<html>
<head>
	<title>Proses Pembayaran</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		$nama=$_POST['nama'];
		$harga=$_POST['harga'];
		$jumlah=$_POST['jumlah'];
		$totalharga = $harga*$jumlah;
		setcookie("totalharga", $totalharga)
	?>
	<div class="container">
		<div class="row">
      		<div class="col-12 bg-info text-light" style="min-height: 100px">Header</div>
      		<nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top container-fluid">
        		<a class="navbar-brand" href="#"></a>
        		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          			<span class="navbar-toggler-icon"></span>
        		</button>
        		<div class="collapse navbar-collapse" id="collapsibleNavbar">
         			<ul class="navbar-nav">
            			<li class="nav-item">
              				<a class="nav-link" href="#">Form Penjualan</a>
            			</li>
          			</ul>
<!-- Ini space, biar searchnya pojok kanan -->
          			<ul class="navbar-nav mr-auto"></ul>
<!-- Search -->
          			<form class="form-inline">
            			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            			<button class="btn btn-success my-2 my-sm-0" type="button">Search</button>
          			</form>
        		</div>
      		</nav>
<!-- isi proses pembayaran -->
			<div class="col-12 col-md-8 col-lg-10 bg-warning" style="min-height: 650px">
      			<h2 class="text-center mt-4 mb-4">Proses Pembayaran</h2>
				<form action="Bayar.php" method="post">		
					<div class="col-12">
						<div class="form-group row min-0">
  							<label class="col-sm-2 col-form-label">Nama Barang :</label>
  							<input class="form-control mb-2 w-75" type="text" name="nama" value="<?php echo $nama;?>">
  						</div>
  						<div class="form-group row min-0">
  							<label class="col-sm-2 col-form-label">Harga Barang :</label>
  							<input class="form-control mb-2 w-75" type="number" name="harga" value="<?php echo $harga;?>">
  						</div>
  						<div class="form-group row min-0">
  							<label class="col-sm-2 col-form-label">Jumlah Barang :</label>
  							<input class="form-control mb-2 w-75" type="number" name="jumlah" value="<?php echo $jumlah;?>">
  						</div>
  						<div class="form-group row min-0">
  							<label class="col-sm-2 col-form-label">Total Harga :</label>
  							<input class="form-control mb-2 w-75" type="number" name="totalharga" value="<?php echo $totalharga;?>" id="totalharga">
  						</div>
  						<div class="form-group row min-0">
  							<label class="col-sm-2 col-form-label" for="bayar">Uang Bayar :</label>
  							<input class="form-control mb-2 w-75" type="number" min=0 name="bayar" onchange="getKembali()" onkeyup="getKembali()" id="bayar" required="">
  						</div>
  						<div class="form-group row min-0">
  							<label class="col-sm-2 col-form-label" for="kembali">Uang Kembali :</label>
  							<input class="form-control mb-2 w-75" type="number" min=0 name="kembali" id="kembali" readonly>
  						</div>
  						<div class="form-inline">
							<button type="submit" class="btn btn-primary w-25">Bayar</button>
						</div>
					</div>
				</form>
			</div>
      		<div class="col-12 col-md-4 col-lg-2 bg-danger text-light">Banner</div>
      		<div class="col-12 bg-info text-light" style="min-height: 50px">Footer</div>    
    	</div>
	</div>
	<script>
		function getKembali(){
			var totalharga = document.getElementById('totalharga').value
			var bayar = document.getElementById('bayar').value

			var kembali = bayar - totalharga
			document.getElementById('kembali').value = kembali 
			console.log(kembali)
		}
	</script>
</body>
</html>