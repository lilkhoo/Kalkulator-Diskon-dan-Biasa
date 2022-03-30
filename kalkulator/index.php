<!DOCTYPE html>
<html>

<head>
   <title>Kalkulator</title>
   <link rel="stylesheet" type="text/css" href="../style.css">

   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#a2d9ff" fill-opacity="1" d="M0,128L60,128C120,128,240,128,360,154.7C480,181,600,235,720,261.3C840,288,960,288,1080,266.7C1200,245,1320,203,1380,181.3L1440,160L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
   </svg>
</head>

<!-- Navbar -->
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

<body>
   <?php
   if (isset($_POST['hitung'])) {
      $bil1 = $_POST['bil1'];
      $bil2 = $_POST['bil2'];
      $operasi = $_POST['operasi'];
      switch ($operasi) {
         case 'tambah':
            $hasil = $bil1 + $bil2;
            break;
         case 'kurang':
            $hasil = $bil1 - $bil2;
            break;
         case 'kali':
            $hasil = $bil1 * $bil2;
            break;
         case 'bagi':
            $hasil = $bil1 / $bil2;
            break;
      }
   }
   ?>


   <div class="kalkulator">
      <form method="post" action="index.php">
         <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
         <input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
         <select class="opt" name="operasi">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">x</option>
            <option value="bagi">/</option>
         </select>
         <input type="submit" name="hitung" value="Hitung" class="tombol">
      </form>
      <?php if (isset($_POST['hitung'])) { ?>
         <input type="text" value="<?php echo $hasil; ?>" class="bil">
      <?php } else { ?>
         <input type="text" value="0" class="bil">
      <?php } ?>
   </div>
</body>


<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
   <path fill="#a2d9ff" fill-opacity="1" d="M0,128L60,128C120,128,240,128,360,154.7C480,181,600,235,720,261.3C840,288,960,288,1080,266.7C1200,245,1320,203,1380,181.3L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
</svg>

</html>