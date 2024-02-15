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
        <h1>Data Siswa</h1>
        
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
                <th>NIS</th><th>Nama</th><th>Jenis Kelamin</th><th>Tanggal Lahir</th><th>Tempat Lahir</th><th>Kelas</th><th>Jurusan</th><th>Alamat</th>
                <th>
                    <a href="input-siswa.php">
                        <button class="btn btn-success">Tambah</button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from siswa order by nis ASC");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['nis']?></td>
                <td><?php echo $row['nama']?></td>
                <td><?php echo $row['jenis_kelamin']?></td>
                <td><?php echo $row['tanggal_lahir']?></td>
                <td><?php echo $row['tempat_lahir']?></td>
                <td><?php echo $row['kelas']?></td>
                <td><?php echo $row['jurusan']?></td>
                <td><?php echo $row['alamat']?></td>
                <td>

                <a href="edit-siswa.php?id=<?php echo $row['siswa_id']?>">
                    <button class="btn btn-xs btn-primary">Edit</button>
                </a>

                <a href="hapus-siswa.php?id=<?php echo $row['siswa_id']?>" onclick=" return confirm('Anda yakin menghapus data?')">
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