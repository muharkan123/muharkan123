<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <title>Web Ark Production | HTML</title>
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
          <a class="nav-link active" href="#">Programming</a>
          <a class="nav-link" href="#">Teknologi</a>
          <a class="nav-link" href="#">Sosial</a>
          <a class="nav-link" href="#">Budaya</a>
          <a class="nav-link" href="#">Ekonomi</a>
          <a class="nav-link" href="#">Politik</a>
        </nav>
    </div>
    <div class="container my-5">
    <div class="bg-light p-5 rounded">
        <div class="text-center">
            <img src="asset/images/html.png" width="300" height="300" alt="">
        </div>
      <div class="col-sm-8 py-5 mx-auto">
        <h1 class="display-5 fw-normal">HTML</h1>
        <p class="fs-3">
            Apa Itu HTML?
        </p>
        <p class="fs-6">HTML adalah bahasa markup yang digunakan untuk membuat sebuah halaman web. Isinya terdiri dari berbagai kode yang dapat menyusun struktur suatu website.
        <br><br>
        Dengan adanya HTML, pengguna dapat membuat atau menyusun heading, paragraf, gambar, link, dan lainnya supaya dapat dilihat banyak orang melalui halaman website. 
        <br><br>
        Untuk bisa diakses secara umum, pengguna perlu membukanya lewat aplikasi browser, seperti Internet Explorer, Chrome, atau Mozilla Firefox. 
        </p>
        <p class="fs-3">
            Sejarah HTML
        </p>
        <p class="fs-6">
        Tim Berners-Lee merupakan sosok ilmuwan dibalik lahirnya HTML. Di tahun 1991, ia awalnya menciptakan HTML sebagai solusi untuk memudahkan para ilmuwan dalam mengakses dokumen satu sama lain. 
        <br><br>
        Selang setahun kemudian, HTML mulai dapat digunakan untuk umum. Sejarah penggunaan HTML secara umum ini pun tak bisa lepas dari peran World Wide Web atau yang kita kenal dengan WWW. Keduanya saling bersinergi supaya informasi yang ingin disebarkan bisa diakses oleh banyak orang. 
        <br><br>
        Tak disangka, kini HTML telah berevolusi menjadi bahasa markup yang telah digunakan oleh lebih dari 92,3% persen website di dunia.
        </p>
        <p>
            Source <a href="https://www.niagahoster.co.id/blog/html-adalah/">Niaga Hoster</a>
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