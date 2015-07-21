<!doctype html>

<head>

	<!-- Basics -->
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Login</title>

	<!-- CSS -->
	
	<link rel="stylesheet" href="signup/css/reset.css">
	<link rel="stylesheet" href="signup/css/animate.css">
	<link rel="stylesheet" href="signup/css/styles.css">
	
</head>


	<!-- Main HTML -->
	
<body>
<br><br><br><br><br><br><br><br><br><br>
	<center><b><h2>SILAHKAN MENDAFTAR</h2></b></center>
	
	<!-- Begin Page Content -->
	
	<div id="container">
		
		<form action="tambah_user.php" method="POST">
		
		<label name="username">Username:</label>
		
		<input type="name" name="username">
		
		<label name="password">Password:</label>
		
		<input type="password" name="password">

		<label name="level">Level:</label>

		<select name="level"><option>admin</option><option>user</option></select>
		
		<div id="lower">
		
		<input type="checkbox"><label class="check" for="checkbox">Biarkan saya tetap masuk</label>
		
		<input type="submit" value="Daftar">
		
		</div>
		
		</form>
		
	</div>
	
	
	<!-- End Page Content -->
	
</body>

</html>
	
	
	
	
	
		
	