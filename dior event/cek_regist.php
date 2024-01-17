<?php

session_start();
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];

$sql = "INSERT INTO users (nama,email) VALUES ('$nama','$email')";

mysqli_query($koneksi,$sql) or die ("SQL Error 2".mysqli_error());

$query_pengunjung=mysqli_query($koneksi, "SELECT * FROM users ORDER BY no DESC") or die(mysql_error());
   $row_pengunjung=mysqli_fetch_array($query_pengunjung)or die(mysqli_error());
   $no=$row_pengunjung['no'];   
   $_SESSION['id_pas'] = $no;

if ($row_pengunjung) {
   header("location:welcoming.html");
}
else{
    echo "ERROR, data gagal diupdate". mysqli_error();
}
//mysql_close($host);
?>