<?php include 'header.php'; 
include 'fungsi.php'
?>

<!-- NAVBAR -->
<body class="warna">
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#service">Service</a>
            <a class="nav-item nav-link" href="#paket">Paket</a>
            <!-- <a class="nav-item nav-link" href="#testimoni">Testimoni</a> -->
            <a class="nav-item nav-link" href="#contact">Contact</a>
            </div>
        </div>
<!-- AKHIR NAVBAR -->
    <!-- JUMBOTRON -->
    <div id="home">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Be a Happy <br>Traveller with Us</h1>
        </div>
      </div>
    <!-- AKHIR JUMBOTRON -->

    <!-- WELCOME -->
    <div class="container">
        <div class="row workingspace">
            <div class="col-lg-7">
              <img src="img/hendra.jpg" alt="workingspace-img" class="img-fluid">
            </div>
            <div class="col-lg-5">
              <h3>Welcome to <br> Garuda Mitra Wisata & Organizer</h3>
              <p>Garuda Mitra Wisata & Organizer adalah Perusahaan yang bergerak dibidang tour travel dan organizer terpercaya milik KOPEGTEL Malang. Mengutamakan kepuasan pelanggan dengan layanan berkualitas, profesional dan kompetitif.</p>
              <p>Garuda Mitra Wisata & Organizer berdiri sejak tahun 2004, yang dirintis melalui pelayanan kendaraan dinas untuk operasional PT. Telkom dan berkembang menjadi penyedia persewaan kendaraan untuk umum.</p>
            </div>
        </div>
    </div>
  </div>
    <!-- AKHIR WELCOME -->

    <!-- SERVICE -->
    <div id="service"><br>
      <div class="service">
          <h2>OUR SERVICE</h2>
      <!-- info panel our service -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 our-service">
            <div class="row">
          <div class="col-lg">
            <a href="wisata.php" class="badge badge-transparant">
            <img src="img/bromo.jpg" alt="Wisata">
            <h4>Wisata</h4>
            </a>
          </div>
          <div class="col-lg">
            <a href="rentcar.php" class="badge badge-transparant">
            <img src="img/mobil lagi.jpg" alt="Rent Car">
            <h4>Rent Car</h4>
            </a>
          </div>
          <div class="col-lg">
            <a href="jne.php" class="badge badge-transparant">
            <img src="img/barang.jpg" alt="Rent Car">
            <h4>Pengiriman Barang</h4>
            </a>
          </div>
          <div class="col-lg">
            <a href="hotel.php" class="badge badge-transparant">
            <img src="img/hotel.jpg" alt="Hotel">
            <h4>Hotel<br> & Penginapan</h4>
            </a>
          </div>
          <div class="col-lg">
            <a href="tiket.php" class="badge badge-transparant">
            <img src="img/pesawat.jpg" alt="Ticket">
            <h4>Ticket</h4>
            </a>
          </div>
          </div>
        </div>
        </div>
      </div>
        </div>
      </div>
      <!-- akhir info panel our service -->
    </div>
    <!-- AKHIR SERVICE -->

    <!-- PAKET -->
    <div id="paket"><br>
    <div class="paket">
        <h2>PAKET</h2>
        <div class="container">
        <p>*harga per orang</p>
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Nama Paket</th>
                    <th scope="col">Rute</th>
                    <th scope="col">Isi</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Harga</th>
                  </tr>
                </thead>

                <!-- SCRIPT -->
                <?php
                    $query = "SELECT*FROM tbl_paket WHERE id LIMIT 2";
                    $hasil = mysqli_query($db, $query);

                    while($row = mysqli_fetch_assoc($hasil)){    
                ?>
                <!-- AKHIR SCRIPT -->

                <div class="tabel-paket">
                <div class="col-lg-12">                             
                  <tr> 
                    <th scope="row"><?php echo $row['nama_paket']?></th>
                    <td><center><div class="col-lg-12"><?php echo $row['rute']?></div></center></td>
                    <td><center><div class="col-lg-10"><?php echo $row['isi']?></div></center></td>
                    <td><center><div class="col-lg-10"><?php echo $row['keterangan']?></div></center></td>
                    <td>Rp. <?php echo $row['harga']?></div></td>
                  </tr>
                  </div>
                </div>
                
                <!-- SCRIPT -->
                <?php
                }
                $hasil = mysqli_query($db, $query);
                $row = mysqli_fetch_assoc($hasil);
                ?>
                <!-- AKHIR SCRIPT -->

              </table>
              </div>
              <a class="tombol btn btn-secondary" href="paket.php">More</a>
        </div>
      </div>
    </div>
    <!-- AKHIR PAKET -->
<br>
<br>
<br>
    <!-- TESTIMONI -->
    <!-- 
    <div id="testimoni"><br>
      <div class="testimoni">
        <h2>Testimoni</h2>
        <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-6 testimoni-konten">
                <img src="img/ivan.jpeg" alt="Testimoni 1" class="float-left">
                <h4>Ivan</h4>
                <p>"Memakai jasa garuda tour & travel memudahkan saya dalam mencari wisata-wisata yang ada di Malang."</p>
              </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 testimoni-konten">
                  <img src="img/sabrina.jpeg" alt="Testimoni 1" class="float-left">
                  <h4>Sabrina</h4>
                  <p>"Saya puas dengan jasa garuda tour & travel karena respon dari adminnya sangat cepat."</p>
                </div>
              </div>
              <div class="row justify-content-center">
                  <div class="col-lg-6 testimoni-konten">
                    <img src="img/resya.jpeg" alt="Testimoni 1" class="float-left">
                    <h4>Resya</h4>
                    <p>"Memakai jasa garuda tour & travel membuat saya merasa seperti profesional traveler karena kemudahan dalam mengunjungi berbagai wisata-wisata di Malang."</p>
                  </div>
                </div>
            </div>
          </div>
      </div>
    -->
    <!-- AKHIR TESTIMONI -->

    <!-- MULAI MAP -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6833.530450305346!2d112.64118010301077!3d-7.943000787377871!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629c056bfd4a9%3A0xbe0553837765900c!2sPlasa+Telkom+Group+Blimbing+Malang!5e1!3m2!1sid!2sid!4v1549186587350" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
    <!-- AKHIR MAP -->
    
    <!-- FIXED KONTAK -->
    <?php include 'kontak.php';
    ?>
    <!-- AKHIR FIXED KONTAK -->
    
    <!-- FOOTER -->
    <?php include 'footer.php';
    ?>
    <!-- AKHIR FOOTER -->
</div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <!-- My Script -->
    <script>
    $('.carousel').carousel({
      interval: 4000
    })
    </script>
  </body>
</html>