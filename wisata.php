<?php include 'header.php'; 
?>
<!-- NAVBAR -->
<div class="warna">
<nav class="navbar navbar-expand-lg navbar-dark">
    <nav class="navbar fixed-top navbar-light">
      <div class="container">
        <a class="navbar-brand" href="index.php">GARUDA MITRA WISATA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link active" href="index.php #service">Service</a>
            <a class="nav-item nav-link" href="index.php #paket">Paket</a>
            <!-- <a class="nav-item nav-link" href="index.php #testimoni">Testimoni</a> -->
            <a class="nav-item nav-link" href="#contact">Contact</a>
            </div>
        </div>
      </div>
    </nav>
    </nav>
<!-- AKHIR NAVBAR -->
<!-- CONTAINER -->
<div class="container">
    <div class="wisata">
        <h3>WISATA</h3>
        <div class="row justify-content-center">
          <!-- WISATA 1 -->
          <div class="col-lg-12 our-wisata-1">
            <div class="row">
            <div class="col-lg">
            <a href="gunung.php" class="badge badge-transparant">
              <img src="img/gunung/wisata bromo.jpg" alt="Gunung">
              <h5>Gunung</h5>
            </a>
            </div>
            <div class="col-lg">
            <a href="pantai.php" class="badge badge-transparant">
              <img src="img/pantai/telukasmara.jpg" alt="Pantai">
              <h5>Pantai</h5>
            </a>
            </div>
            <div class="col-lg">
            <a href="wahana.php" class="badge badge-transparant">
              <img src="img/wahana/jatimpark3(1).jpg" alt="Wahana">
              <h5>Wahana</h5>
            </a>
            </div>
           </div>
           </div>
           <!-- AKHIR WISATA 1 -->
           <!-- WISATA 2 -->
           <div class="col-lg-12 our-wisata-2">
            <div class="row">
            <div class="col-lg">
            <a href="museum.php" class="badge badge-transparant">
              <img src="img/museum/museumangkut1.jpg" alt="Museum">
              <h5>Museum</h5>
            </a>
            </div>
            <div class="col-lg">
            <a href="kuliner.php" class="badge badge-transparant">
              <img src="img/kuliner/kuliner.jpg" alt="Kuliner">
              <h5>Kuliner</h5>
            </a>
            </div>
            <div class="col-lg">
            <a href="airterjun.php" class="badge badge-transparant">
              <img src="img/air terjun/air terjun.jpg" alt="Air terjun">
              <h5>Air Terjun</h5>
            </a>
            </div>
           </div>
           </div>
           <!-- AKHIR WISATA 2 -->
        </div>
    </div>
    </div>
<!-- AKHIR CONTAINER -->

<!-- FIXED KONTAK -->
<?php include 'kontak.php';
    ?>
    <!-- AKHIR FIXED KONTAK -->
    
<!-- FOOTER -->
<?php include 'footer.php';
?>
</div>