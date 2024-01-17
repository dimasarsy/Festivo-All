<?php

session_start();

include('koneksi.php');

$email     = $_POST['email'];
$password  = $_POST['password'];

//query
$query  = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result     = mysqli_query($koneksi, $query);
$num_row     = mysqli_num_rows($result);
$row         = mysqli_fetch_array($result);

if($num_row >=1) {
    
    header("location:index.php");

} else {
    
    header("location:index.php");

}

?>