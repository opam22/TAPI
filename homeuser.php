<?php
session_start();
//jika user yang mengakses halaman ini tidak memiliki session(belum login) maka kita redirect sehingga hanya user yang
//sudah login yang bisa mengakses halaman ini
if(empty($_SESSION['username'])){

		header('location:index.php');

}

?>
		<ul>
          <li><a href="index.php">Beranda</a></li>
          <li><a href="support.php">Dukungan</a></li>
          <li><a href="about.php">Tentang</a></li>
          <li><a href="blog.php">Kotak Saran</a></li>
		  <li><a href="logout.php">Logout</a></li>
		  </ul>
		  
<?php
	//kalau ada message
	if (isset($_GET['message'])) {
		
		if ($_GET['message'] == 'notAdmin') { ?>
				
				<h4 style="color:red;">Anda bukan admin</h4>

		<?php
		}

	}

	?>