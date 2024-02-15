<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-guru.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from guru where guru_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="hidden" name="guru_id" value="<?php echo $row['guru_id']?>" class="form-control">
                        <input type="number" name="nip" value="<?php echo $row['nip']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">NAMA</label>
                        <input type="text" name="nama" value="<?php echo $row['nama']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="<?php echo $row['jenis_kelamin']?>" selected><?php echo $row['jenis_kelamin']?></option>
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                     <div class="form-group">
                        <label for="kelas">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control"><?php echo $row['alamat']?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="text" name="telepon" value="<?php echo $row['telepon']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="kelas">Email</label>
                        <input type="email" name="email" value="<?php echo $row['email']?>" class="form-control">
                    </div>

                     <div class="form-group">
                        <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                        <input type="text" name="pendidikan_terakhir" value="<?php echo $row['pendidikan_terakhir']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="kelas">Tingkat Pengajaran</label>
                        <input type="tingkat_pengajaran" name="tingkat_pengajaran" value="<?php echo $row['tingkat_pengajaran']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="kelas">Jabatan</label>
                        <input type="jabatan" name="jabatan" value="<?php echo $row['jabatan']?>" class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php";?>