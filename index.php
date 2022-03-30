<?php

// var_dump($_POST);

$besarDiskon = null;
$hargaSetelahDiskon = null;

if (isset($_POST["submit"])) {

   $besarDiskon = $_POST["harga"] * $_POST["diskon"] / 100;
   $hargaSetelahDiskon = $_POST["harga"] - $besarDiskon;
} else {
   $besarDiskon = null;
   $hargaSetelahDiskon = null;
}


?>

<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#a2d9ff" fill-opacity="1" d="M0,128L60,128C120,128,240,128,360,154.7C480,181,600,235,720,261.3C840,288,960,288,1080,266.7C1200,245,1320,203,1380,181.3L1440,160L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
   </svg>

   <title>Kalkulator Diskon</title>
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow fixed-top">
   <div class="container">
      <a class="navbar-brand" href="#">Eko Setyono Wibowo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav ms-auto">
            <li class="nav-item">
               <a class="nav-link" aria-current="page" href="/kalkulatorDiskon">Kalkulator Diskon</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" aria-current="page" href="/kalkulatorDiskon/kalkulator">Kalkulator Biasa</a>
            </li>
         </ul>
      </div>
   </div>
</nav>
<!-- Akhir Navbar -->

<h1 class="fs-4 text-center mt-5 mb-3">Kalkulator Diskon</h1>

<body>
   <form action="" method="post">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-4">
               <div class="input-group mb-3">
                  <span class="input-group-text" id="inputGroup-sizing-default">Harga</span>
                  <input type="number" class="form-control" name="harga" id="harga" autofocus>
               </div>
            </div>
         </div>
      </div>

      <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-4">
               <small class="text-muted">Automatically Use (%)</small>
               <div class="input-group mb-3">
                  <span class="input-group-text" id="inputGroup-sizing-default">Diskon</span>
                  <input type="number" class="form-control" name="diskon" id="diskon">
               </div>
               <button type="submit" name="submit" class="btn btn-primary col-md-12">Submit</button>
            </div>
         </div>
      </div>


      <h1 class="fs-4 text-center mt-5">Output</h1>
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-4">
               <small class="text-muted">Besar Diskon :</small>
               <div class="input-group mb-3">
                  <input type="number" class="form-control" value="<?= $besarDiskon; ?>" readonly>
               </div>
            </div>
         </div>
      </div>

      <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-4">
               <small class="text-muted">Harga Setelah Diskon :</small>
               <div class="input-group mb-3">
                  <input type="number" class="form-control" value="<?= $hargaSetelahDiskon; ?>" readonly>
               </div>
            </div>
         </div>
      </div>
   </form>

   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#a2d9ff" fill-opacity="1" d="M0,128L60,128C120,128,240,128,360,154.7C480,181,600,235,720,261.3C840,288,960,288,1080,266.7C1200,245,1320,203,1380,181.3L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
   </svg>

















   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>