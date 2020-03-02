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

<!-- CAROUSEL -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel"> 
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/alun-alun/alun batu.jpg" class="d-block w-100" height="550px" width="max" size="100%" alt="...">
      <div class="carousel-caption d-md-block">
      <h5>Alun-Alun Batu</h5>
      </div>
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- AKHIR CAROUSEL -->
</div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<!-- MY SCRIPT -->
<script>
$('.carousel').carousel({
  interval: 3000
})
</script>