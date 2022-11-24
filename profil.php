<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <title>Web Ark Production</title>
    <style>
    .fa-whatsapp{
        color: #76BA99;
    }
    .fa-instagram{
        color: maroon;
    }
    .fa-facebook{
      color : #3AB0FF;
    }
    a:link {
        text-decoration: none;
      }

      a:visited {
        text-decoration: none;
      }

      a:hover {
        text-decoration: none;
      }
      
</style>
</head>
<body>
    <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><a href="home.php"/></svg>
        <span class="navbar-brand fs-5">Ark Production</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="index.php" class="nav-link " aria-current="page">Home</a></li>
        <li class="nav-item"><a href="galeri.php" class="nav-link">Galeri</a></li>
        <li class="nav-item"><a href="profil.php" class="nav-link active">Profil</a></li>
        <li class="nav-item"><a href="contactus.php" class="nav-link">Contact Us</a></li>
      </ul>
    </header>
    </div>
  <div class="b-example-divider"></div>

  <div class="container my-5">
    <div class="row flex-lg-row-reverse align-items-center rounded-2 border shadow-lg">
        <div class="row flex-lg-row-reverse align-items-center g-7 py-5">
            <div class="col-10 col-sm-6 col-lg-5">
              <a href="#"><img src="asset/images/IMG-20200107-WA0031.jpg" class="d-block mx-lg-auto img-fluid m-auto" alt="Foto-Profil" width="350" height="100" loading="lazy"></a>
            </div>
            <div class="col-lg-7">
              <h1 class="display-5 fw-bold lh-1 mb-4">Profil</h1>
              <p class="lead">Website yang saya buat sebagai latihan untuk meningkatkan skill dalam dunia web development</p>
              <p class="lead">Hal ini dapat digunakan juga sebagai sarana informasi dan komunikasi</p>
              <p class="lead">berikut juga saya lampirkan link dalam website agar bisa berkomunikasi lebih lanjut
              </p>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-outline-success btn-lg px-4"><a href="https://wa.me/+6281990080928" class="d-flex align-items-center justify-content-center"><span class="fa fa-whatsapp"><i class="sr-only"></i></span></a></button>
                <button type="button" class="btn btn-outline-primary btn-lg px-4"><a href="https://www.facebook.com/arkanfauzan.arkan" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only"></i></span></a></button>
                <button type="button" class="btn btn-outline-danger btn-lg px-4"><a href="https://www.instagram.com/markanfauzanw/?hl=id" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only"></i></span></a></button>
              </div>
            </div>
        </div>
    </div>
</div>




<?php
include('footer.php');
?>
</body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X      +965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>
