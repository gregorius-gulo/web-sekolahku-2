<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

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

include "../koneksi.php";

$simpan=$koneksi->query("insert into guru(nip,nama,jenis_kelamin,tanggal_lahir,alamat,telepon,email,pendidikan_terakhir,tingkat_pengajaran,jabatan) 
                        values ('$nip', '$nama', '$jenis_kelamin', '$tanggal_lahir', '$alamat', '$telepon', '$email', '$pendidikan_terakhir', '$tingkat_pengajaran', '$jabatan')");

if($simpan==true){

    header("location:tampil-guru.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>