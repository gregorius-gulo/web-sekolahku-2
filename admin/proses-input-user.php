<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$username=$_POST['username'];
$email=$_POST['email'];
$password=md5($_POST['username']);
$token=md5($username.$password);
$status=1;

include "../koneksi.php";

$simpan=$koneksi->query("insert into user(username,email,password,token,status,last_login) 
                        values ('$username', '$email', '$password', '$token','$status',now())");

if($simpan==true){

    header("location:tampil-user.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>