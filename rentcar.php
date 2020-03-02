<?php include 'header.php';
include 'fungsi.php';
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
            <a class="nav-item nav-link" href="index.php #service">Service</a>
            <a class="nav-item nav-link" href="index.php #paket">Paket</a>
            <!-- <a class="nav-item nav-link" href="index.php #testimoni">Testimoni</a> -->
            <a class="nav-item nav-link" href="#contact">Contact</a>
            </div>
        </div>
      </div>
    </nav>
    </nav>
<!-- AKHIR HEADER -->

<!-- CONTENT -->
      <div class="paket-page">
        <h2>RENT CAR</h2>
        <div class="container">
        <a class="tombol-pesan btn btn-success" href="https://wa.me/6282144409491?text=Hai%2C%20saya%20mau%20pesan%20rental%20mobil.%20Gimana%20caranya%3F%20Terima%20Kasih%F0%9F%98%8A">Pesan Sekarang!</a>
        <p>*harga per hari</p>
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Nama Kendaraan</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Harga Promo</th>
                  </tr>
                  </div>
                </thead>
                
                <!-- SCRIPT -->
                <?php
                    $query = "SELECT*FROM tbl_car";
                    $hasil = mysqli_query($db, $query);

                    while($row = mysqli_fetch_assoc($hasil)){                  
                ?>
                <!-- AKHIR SCRIPT -->

                <tbody class="tabel-car">
                <div class="col-lg-12">
                  <tr>
                    <th scope="row"><?php echo $row['nama_kendaraan']?></th>
                    <td><div class="col-lg-10">Rp. <?php echo $row['harga']?></td>
                    <td class="bg-success"><div class="col-lg-10">Rp. <?php echo $row['promo']?></div></td>
                  </tr>
                  </div>
                </tbody>

                <!-- SCRIPT -->
                <?php
                }
                $hasil = mysqli_query($db, $query);
                $row = mysqli_fetch_assoc($hasil);
                ?>
                <!-- AKHIR SCRIPT -->

              </table>
              </div>
        </div>
      </div>
    
<!-- AKHIR CONTENT -->

<!-- FIXED KONTAK -->
<?php include 'kontak.php';
    ?>
    <!-- AKHIR FIXED KONTAK -->


<!-- FOOTER -->
<?php include 'footer.php'
?>
<!-- AKHIR FOOTER -->
</div>