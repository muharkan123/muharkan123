<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <title>Web Ark Production | Laravel</title>
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
            <img src="asset/images/laravel.png" width="300" height="300" alt="">
        </div>
      <div class="col-sm-8 py-5 mx-auto">
        <h1 class="display-5 fw-normal">Laravel</h1>
        <p class="fs-3">
            Apa Itu Laravel?
        </p>
        <p class="fs-6">Laravel adalah framework aplikasi web dengan sintaks yang ekspresif dan elegan. Laravel telah meletakkan fondasinya yang memudahkan kita untuk berkreasi tanpa memusingkan hal-hal kecil. PHP menjadi bahasa pemrograman yang sangat dinamis, tapi semenjak adanya Laravel, dia menjadi lebih powerful, cepat, aman, dan simpel. Setiap rilis versi terbaru, Laravel  selalu memunculkan teknologi baru di antara framework PHP lainnya.
            <br><br>
            Laravel diluncurkan sejak tahun 2011 dan mengalami pertumbuhan yang cukup eksponensial. Di tahun 2015, Laravel adalah framework yang paling banyak mendapatkan bintang di Github. Sekarang framework ini menjadi salah satu yang populer di dunia, tidak terkecuali di Indonesia. 
            <br><br>
            Laravel fokus di bagian end-user, yang berarti fokus pada kejelasan dan kesederhanaan, baik penulisan maupun tampilan, serta menghasilkan fungsionalitas aplikasi web yang bekerja sebagaimana mestinya. Hal ini membuat developer maupun perusahaan menggunakan framework ini untuk membangun apa pun, mulai dari proyek kecil hingga skala perusahaan kelas atas.
            <br><br>
            Laravel mengubah pengembangan website menjadi lebih elegan, ekspresif, dan menyenangkan, sesuai dengan jargonnya “The PHP Framework For Web Artisans”. Selain itu, Laravel juga mempermudah proses pengembangan website dengan bantuan beberapa fitur unggulan, seperti Template Engine, Routing, dan Modularity.
        </p>
        <p class="fs-3">
            Manfaat Laravel
        </p>
        <p class="fs-6">
            Laravel menawarkan beberapa keuntungan ketika Anda mengembangkan website menggunakan dasar framework ini.
            <br>
            - Pertama, website menjadi lebih scalable (mudah dikembangkan). <br>
            - Kedua, terdapat namespace dan tampilan yang membantu Anda untuk mengorganisir dan mengatur sumber daya website. <br> 
            - Ketiga, proses pengembangan menjadi lebih cepat sehingga menghemat waktu karena Laravel dapat dikombinasikan dengan beberapa komponen dari framework lain untuk mengembangkan website. <br>
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