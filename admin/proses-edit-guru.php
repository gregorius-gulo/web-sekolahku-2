<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['guru_id'];
$nip=$_POST['nip'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$alamat=$_POST['alamat'];
$telepon=$_POST['telepon'];
$email=$_POST['email'];
$pendidikan_terakhir=$_POST['pendidikan_terakhir'];
$tingkat_pengajaran=$_POST['tingkat_pengajaran'];
$jabatan=$_POST['jabatan'];

$ubah=$koneksi->query("update guru set nip='$nip', nama='$nama', jenis_kelamin='$jenis_kelamin', tanggal_lahir='$tanggal_lahir', alamat='$alamat', telepon='$telepon', email='$email', pendidikan_terakhir='$pendidikan_terakhir', tingkat_pengajaran='$tingkat_pengajaran', jabatan='$jabatan' where guru_id='$id'");

if($ubah==true){

    header("location:tampil-guru.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>