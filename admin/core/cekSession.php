<?php
if (isset($_SESSION['username']) && isset($_SESSION['level'])) {
	if ($_SESSION['level'] != 'admin') {
		header('location:../index.php');	
	}
}
else{
	header('location:../index.php');
}
?>