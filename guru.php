<?php include "header.php"; ?>

  <!-- Awal Page -->
  <div class="container">
    <!-- Awal baris -->
    <div class="row">
      <div class="col-md-12"><!-- Awal Kolom -->
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2><span class="#"></span> Data Guru</h2>
          </div>
          <div class="panel-body">
            <table class="table table-bordered table-hover text-center" id="data-table">
            <thead class="bg-info text-white">
                <tr>
                  <th>NIP</th>
                  <th>Nama Lengkap</th>
                  <th>Jenis Kelamin</th>
                  <th>Tanggal Lahir</th>
                  <th>Alamat</th>
                  <th>Telepon</th>
                  <th>Email</th>  
                  <th>Pendidikan Terakhir</th>
                  <th>Tingkat Pengajaran</th>
                  <th>Jabatan</th>
                </tr>
              </thead>
              <?php
                include "koneksi.php";
                $sql = $koneksi->query("SELECT * FROM guru ORDER BY nip ASC");

                while ($row = $sql->fetch_assoc()) {
              ?>
              <tr>
                <td><?php echo $row['nip']?></td>
                <td><?php echo $row['nama']?></td>
                <td><?php echo $row['jenis_kelamin']?></td>
                <td><?php echo $row['tanggal_lahir']?></td>
                <td><?php echo $row['alamat']?></td>
                <td><?php echo $row['telepon']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['pendidikan_terakhir']?></td>
                <td><?php echo $row['tingkat_pengajaran']?></td>
                <td><?php echo $row['jabatan']?></td>
              </tr>
              <?php }?>
            </table>
          </div>
        </div>
      </div><!-- Akhir Kolom -->
    </div><!-- Akhir Baris -->
  </div><!-- Akhir Page -->

  <?php include "footer.php"; ?>