<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12"><br><br>
            <div class="card" style="margin-top: 50px;">
                <div class="card-body">
                    <h2 class="card-title" style="font-weight: bold;">Selamat Datang, <?php echo $_SESSION['username'];?></h2>
                    <h4><p class="card-text">Anda berada di pusat kendali SMK Negeri 2 Mandrehe. Kelola informasi dengan efisiensi dan gaya.</p></h4> <br>
                    <div class="row mt-4">
                        <div class="col-md-4">
                            <a class="btn btn-primary btn-lg btn-block" href="tampil-siswa.php" role="button">Data Siswa</a>
                        </div>
                        <div class="col-md-4">
                            <a class="btn btn-success btn-lg btn-block" href="pendaftaran.php" role="button">Pendaftaran Siswa Baru</a>
                        </div>
                        <div class="col-md-4">
                            <a class="btn btn-danger btn-lg btn-block" href="tampil-user.php" role="button">Kelola Pengguna</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <br><br><br><br><br>
    <br> <br><br><br><br><br><br>

</div><!-- Akhir Container -->
<?php include "footer.php";?>