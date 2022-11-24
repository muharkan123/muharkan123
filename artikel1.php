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
            <img src="asset/images/php.png" width="300" height="300" alt="">
        </div>
      <div class="col-sm-8 py-5 mx-auto">
        <h1 class="display-5 fw-normal">PHP</h1>
        <p class="fs-3">
            Apa Itu Bahasa Pemrograman PHP?
        </p>
        <p class="fs-6">PHP  (PHP: Hypertext Preprocessor) adalah sebuah bahasa pemrograman server side scripting yang bersifat open source.
        <br><br>
        Sebagai sebuah scripting language, PHP menjalankan instruksi pemrograman saat proses runtime. Hasil dari instruksi tentu akan berbeda tergantung data yang diproses.
        </p>
        <p class="fs-3">
            Fungsi PHP
        </p>
        <p class="fs-6">
        Secara umum, fungsi PHP adalah digunakan untuk pengembangan website. Baik website statis seperti situs berita yang tidak membutuhkan banyak fitur. Ataupun website dinamis seperti toko online dengan segudang fitur pendukung.
        <br><br>
        Namun, penggunaan PHP tidak terbatas pada pengembangan website saja, lho. Karena fleksibilitasnya yang tinggi, PHP juga bisa digunakan untuk membuat aplikasi komputer sekalipun. Keren juga, ya?
        </p>

        <p class="fs-3">
            Mengapa harus menggunakan PHP?
        </p>
        <p class="fs-6">
        Saat ini, tak kurang dari 78% website di seluruh dunia menggunakan bahasa pemrograman yang diciptakan Rasmus Lerdorf di tahun 1995 ini. Bahkan platform besar seperti Facebook juga menggunakannya.
<br>
        Lalu, apa yang membuat PHP begitu populer? Mengapa menggunakan PHP yang sudah berumur lebih dari dua dekade ini? Berikut beberapa alasannya:
<br><br>    - Cenderung mudah dipelajari — dibanding beberapa bahasa pemrograman populer lain, PHP lebih mudah dipelajari.
<br> <br>   - Materi belajar yang melimpah — umur PHP yang “cukup tua” menyebabkan banyak sekali dokumentasi, panduan, dan komunitas aktif bertebaran di jagat maya. Jadi, tak perlu takut jika Anda mengalami kesulitan.
<br><br>    - PHP bersifat open-source — siapapun bisa menggunakan PHP tanpa mengeluarkan biaya sepeserpun.
<br><br>    - Kecepatan tinggi — PHP terbukti bisa meningkatkan kecepatan loading dibanding bahasa lain. Misalnya, lebih cepat tiga kali daripada Phyton pada beberapa kasus.
<br><br>    - Banyaknya pilihan database — PHP bisa digunakan di hampir semua jenis database. Mulai dari MySQL, hingga non-relational database seperti Redis.
<br><br>    - Kompatibilitas yang baik dengan HTML  — script PHP tidak mengganggu HTML sama sekali. Justru mereka berdua saling melengkapi.
<br> <br>   - Fleksibilitas tinggi — PHP bisa dikombinasikan dengan banyak sekali bahasa pemrograman lain. Sehingga bisa Anda gunakan sesuai kebutuhan.
<br> <br>   - Multi-platform — PHP bisa Anda gunakan di macam-macam operating system. Mulai dari Windows, Linux, hingga MacOS.
<br> <br>   - Selalu diperbarui — sejak pertama kali muncul tahun 1995, sekarang PHP sudah berada pada versi 8.
<br><br>    - Mendukung layanan cloud  — siapa sangka, walaupun umur PHP hampir dua dekade, tapi ia bisa mendukung layanan cloud dengan skalabilitas yang baik.
        </p>

        <p>
            Source <a href="https://www.niagahoster.co.id/blog/pengertian-php/">Niaga Hoster</a>
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