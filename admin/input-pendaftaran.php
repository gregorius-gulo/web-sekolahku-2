<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php";?>

    <div class="container">
         <div class="row">
            <div class="col-md-12">
                <h2>PENDAFTARAN SISWA</h2>
            <form action="proses-input-pendaftaran.php" method="post">

                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
                </div>

                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-control" name="jenis_kelamin">
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat"class="form-control" placeholder="Alamat Lengkap" required></textarea>
                </div>

                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
                </div>

                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
                </div>

                <div class="form-group">
                    <label for="asal_sekolah">Asal Sekolah</label>
                    <input type="text" class="form-control" name="asal_sekolah" placeholder="Asal Sekolah">
                </div>

                <div class="form-group">
                    <label for="nomor_hp">Nomor Telepon Orangtua/Wali</label>
                    <input type="text" class="form-control" name="nomor_hp" placeholder="Nomor Handphone/WA">
                </div>

                <div class="form-group">
                    <label for="jurusan">Pilih Jurusan</label>
                    <select class="form-control" name="pilihan_jurusan">
                        <option value="Otomatisasi dan Tata Kelola Perkantoran">Otomatisasi dan Tata Kelola Perkantoran</option>
                        <option value="Desain Pemodelan dan Informasi Bangunan">Desain Pemodelan dan Informasi Bangunan</option>
                        <option value="Agribisnis Tanaman Pangan dan Hortikultura">Agribisnis Tanaman Pangan dan Hortikultura</option>
                        <option value="Teknik Kendaraan Ringan dan Otomotif">Teknik Kendaraan Ringan dan Otomotif</option>
                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-danger">Batal</button>
            </form>
            </div>
        </div>
    </div>
    </div> <br><br><br><br>

<?php include "footer.php";?>