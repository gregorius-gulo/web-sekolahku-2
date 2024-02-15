<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12"><br><br><br>
        <h1>Data Guru</h1>
        
            <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Penyimpanan Berhasil!
                    </div>
            <?php

            }

            ?>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>

            <?php 

            if(@$_GET['pesan']=="editBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Perubahan Berhasil!
                    </div>
            <?php

            }

            ?>


         <table class="table table-bordered table-hover text-center" id="data-table">
            <thead>
            <tr>
                <th>NIP</th><th>Nama Lengkap</th><th>Jenis Kelamin</th><th>Tanggal Lahir</th><th>Alamat</th><th>Telepon</th><th>Email</th><th>Pendidikan Terakhir</th><th>Tingkat Pengajaran</th><th>Jabatan</th>
                <th>
                    <a href="input-guru.php">
                        <button class="btn btn-success">Tambah</button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from guru order by nip ASC");

        while($row= $sql->fetch_assoc()){
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

                <td>
                <a href="edit-guru.php?id=<?php echo $row['guru_id']?>">
                    <button class="btn btn-xs btn-primary">Edit</button>
                </a>

                <a href="hapus-guru.php?id=<?php echo $row['guru_id']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-danger">Hapus</button>
                </a>

                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div><br><br><br>


<?php include "footer.php";?>