<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <title>Web Ark Production</title>
    <style>
      .roww {
  display: flex;
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.columnn {
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.columnn img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .columnn {
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .columnn {
    flex: 100%;
    max-width: 100%;
  }
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
        <li class="nav-item"><a href="galeri.php" class="nav-link active">Galeri</a></li>
        <li class="nav-item"><a href="profil.php" class="nav-link">Profil</a></li>
        <li class="nav-item"><a href="contactus.php" class="nav-link">Contact Us</a></li>
      </ul>
    </header>
    </div>
  <div class="b-example-divider"></div>

  <div class="row flex-lg-row-reverse align-items-center rounded-2 border shadow p-3 mb-5 bg-body rounded">
    <div class="container text-center mt-6 p-lg-5 my-5">
    <h1 class="display-4 fw-normal">Galeri</h1>
      <p class="lead fw-normal">Dalam rangka menambah hobby dalam hal positif, terkadang kami melakukan kegiatan fotografi. Berikut adalah portofolio mengenai fotografi yang mungkin dapat membuat anda terinspirasi :))</p>
      <a class="btn btn-outline-secondary" href="#artik">Explore!!</a>
      <br><br><br><br>
    </div>
    <div class="roww" id="artik">
  <div class="columnn">
    <img src="asset/images/gambar1.jpeg">
    <img src="asset/images/gambar12.jpeg">
    <img src="asset/images/gambar3.jpeg">
    <img src="asset/images/gambar4.jpeg">
    <img src="asset/images/gambar11.jpeg">
    <img src="asset/images/gambar7.jpeg">
    <img src="asset/images/gambar6.jpeg">
  </div>
  <div class="columnn">
    <img src="asset/images/gambar8.jpeg">
    <img src="asset/images/gambar9.jpeg">
    <img src="asset/images/gambar10.jpeg">
    <img src="asset/images/gambar5.jpeg">
    <img src="asset/images/gambar2.jpeg">
    <img src="asset/images/gambar13.jpeg">
  </div>
  <div class="columnn">
    <img src="asset/images/gambar1.jpeg">
    <img src="asset/images/gambar12.jpeg">
    <img src="asset/images/gambar3.jpeg">
    <img src="asset/images/gambar4.jpeg">
    <img src="asset/images/gambar11.jpeg">
    <img src="asset/images/gambar7.jpeg">
    <img src="asset/images/gambar6.jpeg">
  </div>
  <div class="columnn">
    <img src="asset/images/gambar8.jpeg">
    <img src="asset/images/gambar9.jpeg">
    <img src="asset/images/gambar10.jpeg">
    <img src="asset/images/gambar5.jpeg">
    <img src="asset/images/gambar2.jpeg">
    <img src="asset/images/gambar13.jpeg">
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
