<?php include "header.php"; ?>

                
                <?php 

                    if(@$_GET['pesan']=="inputBerhasil"){

                    ?>
                                    <div class="alert alert-success">
                                    Terima kasih, Anda telah berhasi mendaftar!
                                    </div>
                    <?php

                    }

                    ?>
                    
                    <div class="container">



        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">PENDAFTARAN SISWA</h3><br><br><br>
            <form action="proses-pendaftaran.php" method="post">

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
                    <textarea name="alamat"class="form-control" placeholder="Alamat" required></textarea>
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
                    <label for="nomor_hp">Nomor HP/WA Orang Tua/Wali</label>
                    <input type="text" class="form-control" name="nomor_hp" placeholder="Nomor HP/WA Orang Tua/Wali">
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
                </div><br>

                <button type="submit" class="btn btn-primary">Kirim</button>
                <button type="reset" class="btn btn-danger">Batal</button>
            </form>
            </div>
        </div>
    </div><br><br><br>

    <?php include "footer.php"; ?>