<!-- HEADER -->
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
            <a class="nav-item nav-link active" href="paket.php">Paket</a>
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
                  </div>
                </thead>
                
                <!-- SCRIPT -->
                <?php
                    $query = "SELECT*FROM tbl_paket";
                    $hasil = mysqli_query($db, $query);

                    while($row = mysqli_fetch_assoc($hasil)){                  
                ?>
                <!-- AKHIR SCRIPT -->
                
                <tbody class="tabel-paket">
                <div class="col-lg-12">
                  <tr>
                    <th scope="row"><?php echo $row['nama_paket']?></th>
                    <td><center><div class="col-lg-12"><?php echo $row['rute']?></div></center></td>
                    <td><center><div class="col-lg-10"><?php echo $row['isi']?></div></center></td>
                    <td><center><div class="col-lg-10"><?php echo $row['keterangan']?></div></center></td>
                    <td><div class="col-lg-10">Rp. <?php echo $row['harga']?></div></td>
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