<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Мой сайтик!)</title>
	<link rel="stylesheet" href="css/main_style.css">
<script src="js/jquery-3.3.1.js"></script>
</head>
<body>
<div class="header">
<?php 
	require_once("connection_db.php"); 
	echo mb_internal_encoding();
?>
<?php 
/*echo '<nav class="top-menu">
		  	<ul class="menu-main">
			    <li><a href="/">Главная</a></li>
			    <li><a href="about.php">Обо мне</a></li>
			    <li><a href="blog.html">Мой блог</a></li>
			    <li><a href="contacts.php">Как связатся</a></li>
		  	</ul>
		</nav>'*/
?>
<?php include("menu.php"); 
session_start();
?>
	<div class="autorisation">
		<form action="autorisation.php" method="post">
			<?php if ($_SESSION['status'] != 'login') {?>
				<label for="">Ulogin:</label>
				<input type="text" name="name" placeholder="Введите Логин"><br />
				<label for="">Upass:</label>
				<input type="password" name="pass" placeholder="12345"><br />
				<input type="submit" name="submit" id="" value="Авторизоватся">
				<button formaction="registration.php">Регестрация</button>
			<?php } else if ($_SESSION['status'] == 'login') { ?>
				<label>Добро пожаловать, <?php echo $_SESSION['name']." ".$_SESSION['surname']." "	 ?></label>
				<button formaction="logout.php">Выход</button>
			<?php } ?>
		</form>
	</div>
</div>
