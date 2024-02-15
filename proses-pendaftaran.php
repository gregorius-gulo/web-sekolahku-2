
<?php

include "koneksi.php";

$nama = $koneksi->real_escape_string($_POST['nama']); 
$jenis_kelamin = $koneksi->real_escape_string($_POST['jenis_kelamin']);
$alamat = $koneksi->real_escape_string($_POST['alamat']);
$tanggal_lahir = $koneksi->real_escape_string($_POST['tanggal_lahir']); 
$tempat_lahir = $koneksi->real_escape_string($_POST['tempat_lahir']);
$asal_sekolah = $koneksi->real_escape_string($_POST['asal_sekolah']);
$nomor_hp = $koneksi->real_escape_string($_POST['nomor_hp']);
$pilihan_jurusan = $koneksi->real_escape_string($_POST['pilihan_jurusan']);       


$simpan=$koneksi->query("insert into pendaftaran(nama,jenis_kelamin,alamat,tanggal_lahir,tempat_lahir,asal_sekolah,nomor_hp,pilihan_jurusan) 
                        values ('$nama', '$jenis_kelamin', '$alamat', '$tanggal_lahir', '$tempat_lahir', '$asal_sekolah', '$nomor_hp', '$pilihan_jurusan')");

if($simpan==true){

    header("location:pendaftaran.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>