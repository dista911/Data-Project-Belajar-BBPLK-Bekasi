<!DOCTYPE html>
<html lang="en">
<head>
  <title>Message Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$nama1 = "Anna";
$email1 = "1na@gmail.com";
$nama2 = "Drew";
$email2 = "Drew@gmail.com";
$message1 = "Yes";
$message2 = "Yes";
?>

  <div class="container">
    <div class="row">
      <div class="col-12 bg-info text-light" style="min-height: 100px">Header</div>
      <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top container-fluid">
        <a class="navbar-brand" href="#"><img src="assets/images/bss.jpg" style="height:50px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="#" tabindex="-1" aria-disabled="true">Message Data</a>
            </li>
          </ul>
<!-- Ini untuk space untuk search -->
          <ul class="navbar-nav mr-auto"></ul>
<!-- Search -->
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success my-2 my-sm-0" type="button">Search</button>
          </form>
        </div>
      </nav>
<!-- isi content(Tabel) -->
      <div class="col-12 col-md-8 col-lg-10 bg-warning" style="min-height: 650px">
        <div class="table-responsive">
          <input class="form-control mt-4" id="myInput" type="text" placeholder="Search No, Names or Emails">
          <table class="table table-bordered bg-light mt-3 table table-hover table-striped">
            <thead class="thead-dark">
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
              </tr>
            </thead>
            <tbody id="myTable">
              <tr>
                <td>1</td>
                <td><?php echo $nama1; ?></td>
                <td><?php echo $email1; ?></td>
                <td><?php echo $message1; ?></td>
              </tr>
              <tr>
                <td>2</td>
                <td><?php echo $nama2; ?></td>
                <td><?php echo $email2; ?></td>
                <td><?php echo $message2; ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-12 col-md-4 col-lg-2 bg-danger text-light">Banner</div>
      <div class="col-12 bg-info text-light" style="min-height: 50px">Footer</div> 
    </div>
  </div>
  <script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
  </script>
</body>
</html>