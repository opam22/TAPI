<table border="1" align="center">

<center><h2>DAFTAR USER</h2>
TUGAS AKHIR PEMROGRAMAN INTERNET</center>	
<tr><th>No</th><th>Username</th><th>Password</th><th>Level</th><th>Fungsi</th></tr>


<?php
include '../config/koneksi.php';
$query="SELECT * FROM user ORDER BY id";
$tampil=mysqli_query($konek,$query)or die(mysqli_error($konek));
$no=1;

while ($data=mysqli_fetch_array($tampil)) {
?>

<tr>
	<td><?php echo $no++ ?></td>
	<td><?php echo $data['username'] ?></td>
	<td><?php echo $data['password'] ?></td>
	<td><?php echo $data['level'] ?></td>
	<td><a href="#">Edit</a><br>
	<a href="hapus_user.php" onclick="return confirm(\'Apakah ingin menghapus?\')">
	Hapus</a></td>
</tr>


<?php
}
?>
</table>