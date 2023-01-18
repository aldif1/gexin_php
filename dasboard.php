<?php
    session_start();
    if($_SESSION['status_login'] != true) {
    	echo '<scrip>window.location="login.php"</script>';
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jokiakun</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<!-- header -->
	<header>
		<div class="container">
		<h1><a href="dasboard.php">jokiakun</a></h1>
		<ul>
			<li><a href="dasboard.php">Dasboard</a></li>
			<li><a href="Profil.php">Profil</a></li>
			<li><a href="data produk.php">Data Produk</a></li>
			<li><a href="keluar.php">Keluar</a></li>
		</ul>
	    </div>
	</header>

	<!-- content -->
	<div class="section">
		<div class="container">
		<h3>Dasboard</h3>
		<div class="box">
			<h4>Selamat Datang <?php echo $_SESSION['a_global']->admin_name ?> Di Toko Online</h4>
		</div>
		</div>
	</div>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2023 - jokiakun.</small>
		</div>
	</footer>
</body>
</html>
