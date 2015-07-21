<?php
//koneksi ke database
include 'config/koneksi.php';

//ambil value dari inputan
$username = $_POST['username'];
$password = $_POST['password'];

//gunakan mysqli_real_escape_string untuk mencegah sql injection
$username = mysqli_real_escape_string($konek, $username);
$password = mysqli_real_escape_string($konek, $password);

//cek di database apakah user yang dimasukan ada atau tidak
$query = "SELECT * FROM user WHERE username = '$username' && password = '$password'";
$queryLogin = mysqli_query($konek, $query)or die(mysqli_error($konek));

//ambil data
$data = mysqli_fetch_array($queryLogin);

//jika query yang dimasukan benar/user ada
if(mysqli_num_rows($queryLogin) == 1){
	
	if ($data['level'] == 'admin') {
		
		session_start();

		//session untuk usernamenya
		$_SESSION['username'] = $data['username'];
		$_SESSION['level'] = $data['level'];

		header('location:admin/');

	}
	else{

		session_start();

		//session untuk usernamenya
		$_SESSION['username'] = $data['username'];
		$_SESSION['level'] = $data['level'];

		header('location:index.php');
	}

		
		//session untuk levelnya, digunakan untuk pengecekan di halaman-halaman aplikasi selanjutnya


		//redirect ke halaman admin(folder admin)
 		



}
else{
	//kalau inputan username dan password salah atau user tidak tersedia, redirect balik ke halaman login dengan message error/gagal(dengan get)

	header('location:index.php?message=gagal');

}


?>