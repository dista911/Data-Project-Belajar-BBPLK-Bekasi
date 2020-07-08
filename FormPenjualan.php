<!DOCTYPE html>
<html>
<head>
	<title>Form Penjualan Barang</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
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
<!-- isi form penjualan -->
			<div class="col-12 col-md-8 col-lg-10 bg-warning" style="min-height: 650px">
      			<h2 class="text-center mt-4 mb-4">FORM PENJUALAN BARANG</h2>
				<form action="ProsesPembayaran.php" method="post">		
					<div class="form-group row min-0">
 		 				<label class="col-sm-2 col-form-label">Nama Barang :</label>
  						<select class="form-control mb-2 w-75" id="sel1" type="text" name="nama">
  							<option></option>
    						<option>Buku Matematika</option>
    						<option>Buku Fisika</option>
    						<option>Buku Ekonomi</option>
    						<option>Buku Geografi</option>
    						<option>Buku Sejarah</option>
  						</select>
  					</div>
  					<div class="form-group row min-0">
  						<label class="col-sm-2 col-form-label">Harga Barang :</label>
  						<input class="form-control mb-2 w-75" type="number" name="harga">
  					</div>
  					<div class="form-group row min-0">
  						<label class="col-sm-2 col-form-label">Jumlah Barang :</label>
  						<input class="form-control mb-2 w-75" type="number" name="jumlah">
  					</div>
					<button type="submit" class="btn btn-primary mx-auto w-100">Hitung</button>
				</form>
			</div>
      		<div class="col-12 col-md-4 col-lg-2 bg-danger text-light">Banner</div>
      		<div class="col-12 bg-info text-light" style="min-height: 50px">Footer</div>    
    	</div>
	</div>
</body>
</html>