<?php


include 'config/koneksi.php';

$nama=$_POST["nama"];
$email=$_POST["email"];
$komentar=$_POST["komentar"];

$input="INSERT INTO guest_book(nama,email,komentar)values('$nama','$email','$komentar')";
$data=mysqli_query($konek,$input) or die (mysqli_error($konek));
header('location:blog.php');


?>
