<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['pendaftaran_id'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$tempat_lahir=$_POST['tempat_lahir'];
$asal_sekolah=$_POST['asal_sekolah'];
$nomor_hp=$_POST['nomor_hp'];
$pilihan_jurusan=$_POST['pilihan_jurusan'];

$ubah=$koneksi->query("update pendaftaran set nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', tanggal_lahir='$tanggal_lahir', tempat_lahir='$tempat_lahir', asal_sekolah='$asal_sekolah', nomor_hp='$nomor_hp', pilihan_jurusan='$pilihan_jurusan' where pendaftaran_id='$id'");

if($ubah==true){

    header("location:pendaftaran.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>