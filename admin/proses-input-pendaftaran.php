<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$tempat_lahir=$_POST['tempat_lahir'];
$asal_sekolah=$_POST['asal_sekolah'];
$nomor_hp=$_POST['nomor_hp'];
$pilihan_jurusan=$_POST['pilihan_jurusan'];


include "../koneksi.php";

$simpan=$koneksi->query("insert into pendaftaran(nama,jenis_kelamin,alamat,tanggal_lahir,tempat_lahir,asal_sekolah,nomor_hp,pilihan_jurusan) 
                        values ('$nama', '$jenis_kelamin', '$alamat', '$tanggal_lahir', '$tempat_lahir', '$asal_sekolah', '$nomor_hp', '$pilihan_jurusan')");

if($simpan==true){

    header("location:pendaftaran.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>