<?php

session_start();
include 'koneksi.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


$sql = "INSERT INTO users (username, email, password) VALUES ('$username','$email','$password')";

mysqli_query($koneksi,$sql) or die ("SQL Error 2".mysqli_error());

$query_pemain=mysqli_query($koneksi, "SELECT * FROM users ORDER BY iduser DESC") or die(mysql_error());
   $row_pemain=mysqli_fetch_array($query_pemain)or die(mysqli_error());
   $iduser=$row_pemain['iduser'];   
   $_SESSION['id_pas'] = $iduser;

if ($row_pemain) {
   header("location:login.php");
}
else{
    echo "ERROR, data gagal diupdate". mysqli_error();
}
//mysql_close($host);
?>