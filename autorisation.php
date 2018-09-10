<?php include_once('header.php') ?>
<?php include_once('leftblock.php') ?>
<div class="content">
	<p>Content site</p>
	<?php 
		$login = $_POST['name'];
		$pas = $_POST['pass'];
		$querry = "SELECT * FROM users WHERE (login = '".$login."') && (pass ='".$pas."')";
		$res = mysqli_query($link, $querry);
		$user = mysqli_fetch_array($res);
		$_SESSION['id'] = $user['id'];
		$_SESSION['login'] = $user['login'];			
		$_SESSION['name'] = $user['name'];		
		$_SESSION['surname'] = $user['surname'];
		$_SESSION['status'] = 'login';
		header("Location: /")		
	?>
</div>
<?php include_once('footer.php'); ?> 