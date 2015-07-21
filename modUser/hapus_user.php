<?php


include '../config/koneksi.php';
$id=$_GET['id'];

$hapus="DELETE FROM user where id='$id'";
$qhapus=mysqli_query($konek,$hapus)or die(mysqli_error($konek));

if($qhapus){
header("location:daftar_user.php");
}

?>