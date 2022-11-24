<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <title>Web Ark Production | CSS</title>
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
            <img src="asset/images/css.png" width="230" height="300" alt="">
        </div>
      <div class="col-sm-8 py-5 mx-auto">
        <h1 class="display-5 fw-normal">CSS</h1>
        <p class="fs-3">
            Apa Itu CSS?
        </p>
        <p class="fs-6">CSS adalah bahasa yang digunakan untuk menentukan tampilan dan format halaman website. Dengan CSS, Anda bisa mengatur jenis font, warna tulisan, dan latar belakang halaman.
            <br><br>
            CSS digunakan bersama dengan bahasa markup, seperti HTML dan XML untuk membangun sebuah website yang menarik dan memiliki fungsi yang berjalan baik. 
            <br><br>
            CSS juga berguna untuk mengatasi keterbatasan HTML dalam mengatur format halaman website. Kenapa demikian?
            Apabila hanya menggunakan HTML ketika membangun website dengan beberapa halaman, Anda harus menulis tag untuk sebuah elemen HTML di semua halaman tersebut. 
            <br><br>
            Dengan adanya CSS, Anda cukup menulis kode satu kali untuk sebuah elemen HTML untuk diterapkan ke semua halaman. Nantinya, ketika akan melakukan perubahan, Anda juga cukup melakukan perubahan pada satu kode tadi. Praktis, bukan?
            <br><br>
            </p>
        <p class="fs-3">
        Apa Fungsi CSS?
        </p>
        <p class="fs-6">
        Secara umum, CSS berfungsi untuk mengatur tampilan halaman website berbasis HTML atau bahasa markup lainnya. Tapi, masih ada beberapa fungsi CSS lainnya, yaitu: <br>
            <br>
            - Mempercepat Loading Halaman Web                   <br> Jika Anda mengatur tampilan website dengan CSS, kecepatan loading website bisa meningkat. Karena Anda bisa menuliskan satu rangkaian kode untuk beberapa halaman website sekaligus, jumlah kode bisa diminimalkan. Dengan begitu, beban pada saat proses loading website lebih kecil.<br><br>
            - Memudahkan Pengelolaan Kode                       <br> Dengan CSS, Anda tidak perlu merubah kode di setiap halaman apabila ingin mengganti tampilan website. Sebagai contoh, Anda ingin mengubah latar belakang semua halaman website. Maka, cukup edit kode CSS terkait latar belakang, perubahan itu akan diterapkan di semua halaman.<br> <br>
            - Menawarkan Lebih Banyak Variasi Tampilan          <br>HTML bisa untuk mengatur tampilan halaman website, tetapi terbatas. Nah, CSS menawarkan lebih banyak style tampilan, sehingga Anda bisa lebih bebas membuat antarmuka website. Contohnya, Anda bisa menggunakan CSS untuk membuat tombol dengan warna yang Anda inginkan.<br><br>
            - Membuat Website Tampil Rapi di Semua Ukuran Layar  <br>Fungsi CSS yang tidak kalah menarik adalah membuat tampilan website optimal di berbagai ukuran layar. Baik itu di laptop maupun di smartphone. Mengapa demikian? 
            <br>
            CSS memiliki berbagai property untuk mengatur tampilan konten sesuai kebutuhan layar, misalnya dengan max-width. Ketika menggunakan property ini mengubah ukuran elemen HTML sesuai ukuran layar yang digunakan untuk menampilkan website.<br>
        </p>
        <p>
            Source <a href="https://www.niagahoster.co.id/blog/laravel-adalah/">Niaga Hoster</a>
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