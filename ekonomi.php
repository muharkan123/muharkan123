<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <?php
    include 'header.php';
    ?>
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
          <a class="nav-link" href="sosial.php">Sosial</a>
          <a class="nav-link" href="budaya.php">Budaya</a>
          <a class="nav-link active" href="ekonomi.php">Ekonomi</a>
          <a class="nav-link" href="politik.php">Politik</a>
        </nav>
        <hr>

    </div>
  
<div class="b-example-divider"></div>
<main class="container text-center">
    <div class="row flex-lg-row-reverse align-items-center rounded-2 border shadow p-3 mb-5 bg-body rounded">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">Tidak ada artikel</h1>
      <p class="lead fw-normal">Artikel untuk kategori ini belum diterbitkan</p>
      <a class="btn btn-primary" href="index.php">Back to Home</a>
    </div>
  </div>

</main>


<br>
<br>

<?php
include('footer.php');
?>



</body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X      +965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>
