<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <title>Web Ark Production</title>
</head>
<body>
    <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><a href="home.php"/></svg>
        <span class="navbar-brand fs-5">Ark Production</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="index.php" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="galeri.php" class="nav-link">Galeri</a></li>
        <li class="nav-item"><a href="profil.php" class="nav-link">Profil</a></li>
        <li class="nav-item"><a href="contactus.php" class="nav-link">Contact Us</a></li>
      </ul>
    </header>
    <nav class="nav nav-pills nav-justified">
          <a class="nav-link" href="programming.php">Programming</a>
          <a class="nav-link" href="teknologi.php">Teknologi</a>
          <a class="nav-link active" href="sosial.php">Sosial</a>
          <a class="nav-link" href="budaya.php">Budaya</a>
          <a class="nav-link" href="ekonomi.php">Ekonomi</a>
          <a class="nav-link" href="politik.php">Politik</a>
        </nav>
        <hr>
    </div>
    <div class="container my-5">
    <div class="bg-light p-5 rounded">
        <div class="text-center">
            <img src="asset/images/sosial.jpg" width="600" height="400" alt="">
        </div>
      <div class="col-sm-8 py-5 mx-auto">
        <h1 class="display-5 fw-normal">Trust issue</h1>
        <p class="fs-6">Trust issue adalah masalah emosional yang berdampak tak hanya pada hubungan personal namun juga profesional.

Kita cenderung merasa curiga terhadap apa yang diinginkan orang lain dan sering mempertanyakan niat dan motivasi sesungguhnya.

Akibatnya, kita akan kesulitan menjalin kedekatan dengan orang lain baik persahabatan, percintaan maupun rekan kerja. 
        <br><br>
        Trust issue adalah masalah yang sering dianggap hanya berkaitan dengan hubungan percintaan maupun rumah tangga.

Faktanya, ada beberapa jenis trust issues dalam relasi yang berbeda dengan implikasinya masing-masing.

Hal ini juga bisa menciptakan konflik dan komunikasi yang buruk dengan teman, rekan kerja di kantor, keluarga atau bahkan kolega yang baru kita kenal.
        </p>
        <p class="fs-6">
        Orang yang memiliki trust issue sering kesulitan untuk bergantung atau percaya dengan kekasih, istri maupun suaminya.

Akibatnya, ini bisa memicu masalah dalam hubungan seperti perselingkuhan terkait kepercayaan, keengganan untuk berkomitmen, dan kesulitan meminta maaf ketika kepercayaannya telah dilanggar.
        </p>
        <p>
            Source <a href="https://lifestyle.kompas.com/read/2022/08/30/121851320/cara-mengatasi-trust-issue-agar-miliki-hubungan-sosial-yang-sehat">kompas.com</a>
        </p>
        <p>
          <a class="btn btn-primary" href="index.php" role="button">Back To Home &raquo;</a>
        </p>
    </div>
    </div>
  </div>
  <?php
  include('footer.php');
  ?>
</body>