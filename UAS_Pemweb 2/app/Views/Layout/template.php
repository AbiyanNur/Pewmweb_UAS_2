<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/bootstrap-grid.css">
  <link rel="stylesheet" href="/css/bootstrap-reboot.css">
  <link rel="stylesheet" href="/css/bootstrap-utilities.css">
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="/css/ionicons.min.css">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/css/dist/mdb5/standard/modules/85b79756f860ab538a160dcb796b4d4a.min.css">
  <link rel="icon" type="png" href="https://upload.wikimedia.org/wikipedia/commons/7/74/Seal_of_Jombang_Regency.svg">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-dark p-2">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="/">
      <img src="https://upload.wikimedia.org/wikipedia/commons/7/74/Seal_of_Jombang_Regency.svg" width="6%" height="6%">
      &nbsp; <span>Portal Berita</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Beranda</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="/home/berita">Berita</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="/home/about">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/home/galeri">Galeri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/home/struktur">Struktur Organisasi</a>
        </li>
        <!--<li class="nav-item">
          <a class="nav-link" href="/beranda">Beranda1</a>
        </li>-->
      </ul>
    </div>
</nav>
<header id="header">
  <div class="d-flex align-items-center p-3">
    <div class="container header-box mt-1">
      <div class="row">
        <div class="col-md-12 text-center">
          <img src="https://upload.wikimedia.org/wikipedia/commons/7/74/Seal_of_Jombang_Regency.svg" height="15%" width="10%" class="img-fluid">
          <h3 class="mt-1">Website Berita Jombang</h3>
          <p>"Info Ter-update Berita Jombang"</p>
          <br>
        </div>
      </div>
    </div>
  </div>
</header>

<section id="sec-article" class="mt-3">
  <div class="container">
    <div class="row mt-3">

      <?= $this->renderSection('content'); ?>

    </div>
  </div>
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
<footer id="footer" class="mt-5 footer bg-dark">
  <?php
  foreach ($seting as $data) :
  ?>
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-6 col-md-12 footer-about">
          <p class="text-white mt-4">
            <font color="#ffffff"><?= $data['kisikisi'] ?></font>
          </p>
        </div>
        <div class="col-lg-3 col-5 footer-links">
          <h4 style="color: white;">Contact Us</h4>
          <p style="color: white;"><?= $data['alamat']; ?></p>
          <p class="mt-4" style="color: white;"><strong>Phone:</strong> <span><?= $data['tlp'] ?></span></p>
          <p style="color: white;"><strong>Email:</strong> <span><?= $data['email'] ?></span></p>
        </div>
      <?php endforeach; ?>
      <div class="col-lg-2 col-md-12 footer-contact text-center text-md-start">
        <h4 style="color: white;">Kategori</h4>
        <ul>
          <?php
          foreach ($kategori as $data) :
          ?>
            <li><a href="#" style="color: white;"><?= $data['value'] ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p style="color: white;">&copy; <span>Copyright</span> <strong class="px-1">Abiyan Nur</strong> <span>All Rights Reserved</span></p>
    </div>
</footer>
<script src="/js/bootstrap.js"></script>
</body>

</html>