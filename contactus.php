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
        <li class="nav-item"><a href="index.php" class="nav-link " aria-current="page">Home</a></li>
        <li class="nav-item"><a href="galeri.php" class="nav-link">Galeri</a></li>
        <li class="nav-item"><a href="profil.php" class="nav-link">Profil</a></li>
        <li class="nav-item"><a href="contactus.php" class="nav-link active">Contact Us</a></li>
      </ul>
    </header>
    </div>
  <div class="b-example-divider"></div>
<main class="container">
<div class="row flex-lg-row-reverse align-items-center rounded-2 border shadow p-3 mb-5 bg-body rounded">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
    <form class="row g-3">
    <h1 class="display-4 fw-normal">Contact Us</h1>
      <p class="lead fw-normal">Jika ada yang ingin anda tanyakan bisa langsung menghubungi atau kirim pesan melalui laman ini</p>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
  </div>
  <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea1" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Comments</label>
</div>
<div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Alamat</label>
</div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Kirim</button>
  </div>
</form>
      
    </div>
  </div>
</main>

<?php
include('footer.php');
?>
</body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X      +965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>
