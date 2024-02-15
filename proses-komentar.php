
<?php

include "koneksi.php";
$nama = $koneksi->real_escape_string($_POST['nama']); 
$email = $koneksi->real_escape_string($_POST['email']); 
$pesan = $koneksi->real_escape_string($_POST['pesan']); 


$simpan=$koneksi->query("insert into komentar(nama,email,pesan) 
                        values ('$nama', '$email', '$pesan')");

if($simpan==true){

    header("location:contact.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>