<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <title>Web Ark Production | PHP</title>
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
          <a class="nav-link" href="sosial.php">Sosial</a>
          <a class="nav-link active" href="budaya.php">Budaya</a>
          <a class="nav-link" href="ekonomi.php">Ekonomi</a>
          <a class="nav-link" href="politik.php">Politik</a>
        </nav>
        <hr>
    </div>
    <div class="container my-5">
    <div class="bg-light p-5 rounded">
        <div class="text-center">
            <img src="asset/images/gmln.webp" width="600" height="400" alt="">
        </div>
      <div class="col-sm-8 py-5 mx-auto">
        <h1 class="display-5 fw-normal">Gamelan</h1>
        <p class="fs-6">Gamelan merupakan gabungan kata "gamel" dan "an". Menurut arti bahasa Jawa, kata "gamel" berarti menabuh atau memukul, sedangkan kata "an" berarti benda. Sehingga gamelan dimaknai sebagai benda berupa alat musik dalam memainkanya dengan cara ditabuh atau dipukul.
        <br><br>
        Kemunculan gamelan berkembang dari zaman kerajaan Hindu Budha di Sumatera, Bali, dan Jawa. Alat musik gamela umum dihubungkan dengan daerah Jawa Tengah. Gamelan dikenal di Jawa mulai tahun 404 masehi. Relief penggambar permainan alat musik gamelan dapat ditemukan pada Candi Borobudur dan Candi Prambanan. Zaman kerajaan dulu, seseorang yang bisa bermain gamelan dinilai bersifat bijaksana dan berani. Era kerajaan Majapahit gamelan berkembang pesat hingga dipertunjukan di pengadilan. Saat masuknya islam ke nusantara, Sunan bonang menyiarkan dakwah ajaran islam dengan memanfaatkan kombinasi antara gamelan dan budaya Hindu Budha.
        </p>
        <p class="fs-6">
        Irama lembut gamelan Jawa sering dimanfaatkan untuk mengiringi pertunjukan tari dan wayang. Seiring perkembangannya, gamelan kemudian berdiri sendiri sebagai pertunjukan musik yang disebut sinden.

Jenis -jenis gamelan yaitu gamelan gedhe, gamelan wayangan, gamelan pakurmatan, gamelan sekaten, gamelan gadhon, gamelan cokekan, gamelan senggani (sengganen). Contoh alat musik gamelan diantaranya kendhang, saron, demung, bonang, kenong, gong, kempul,  gambang, slenthem, gender, siter, rebab, suling, kemanak, gendrum.<br><br>
        </p>
            Source <a href="https://redaksi.ittsmedia.com/gamelan">ittsmedia</a> dan <a href="gramedia.id">gramedia</a>
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