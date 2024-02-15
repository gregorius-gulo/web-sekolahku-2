<?php
session_start();
include "koneksi.php";
$username = $koneksi->real_escape_string($_POST['username']); 
$password = $koneksi->real_escape_string(md5($_POST['password']));

$sql=$koneksi->query("SELECT * FROM user WHERE username= '$username' and password='$password'");
$row= $sql->fetch_assoc();
$result= $sql->num_rows;

if ($result==TRUE)
{
    $user_id=$row['user_id'];
    $token=md5($username.$password);
    date_default_timezone_set('Asia/Jakarta');
    
    $koneksi->query("UPDATE user set last_login=now(), token='$token' where user_id='$user_id' ");

    $_SESSION['user_id']=$row['user_id'];
    $_SESSION['username']=$row['username'];

    header("location:admin/index.php");  
    
} else {

	 echo"<script>alert('Username atau password salah !');document.location.href='login.php';</script>";

}
?>