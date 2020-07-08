<!DOCTYPE html>
<html>
<head>
	<title>Pembarayan</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
	<?php
	$bayar=$_POST['bayar'];
	$totalharga=$_COOKIE['totalharga'];
	$kembali=number_format($bayar-$totalharga,0,"'",".");
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
<!-- isi pembayaran -->
			<div class="col-12 col-md-8 col-lg-10 bg-warning" style="min-height: 650px">
      			<h2 class="text-center mt-4 mb-4">
					<?php
					if($bayar>$totalharga){
						echo "Uang Kembali : $kembali <br>";
					}elseif($bayar<$totalharga){
						echo "Uang Kurang <br>";
					}else{
						echo "Terima Kasih <br>";
					}
					/*if ($bayar>=$totalharga) {
						echo "Uang Kembali : $kembali <br>";
					}else{
						echo "Uang Kurang <br>";
					}*/
					?> 
					<button onclick="self.history.back()" class="btn btn-success">Kembali</button>
				</h2>
			</div>
      		<div class="col-12 col-md-4 col-lg-2 bg-danger text-light">Banner</div>
      		<div class="col-12 bg-info text-light" style="min-height: 50px">Footer</div>    
    	</div>
	</div>
</body>
</html>