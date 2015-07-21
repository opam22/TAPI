<?php


include '../config/koneksi.php';

$username=$_POST['username'];
$password=$_POST['password'];
$level=$_POST['level'];

$input="INSERT INTO user(id,username,password,level)values('','$username','$password','$level')";
$data=mysqli_query($konek,$input) or die (mysqli_error($konek));
header('location:daftar_user.php');


?>