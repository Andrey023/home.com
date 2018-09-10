<?php 
include('header.php');
include('leftblock.php');
?>
	<div class="content">
	 <div class="registrtion">
			<form action="query/query_autorisation.php" method="POST">
				<label for="">Login</label><br />
				<input type="text" name="login"><br />
				<label for="">Пароль</label><br />
				<input type="password" name="pass"><br />
				<label for="">Email</label><br />
				<input type="text" name="email"><br />
				<label for="">Имя</label><br />
				<input type="text" name="name"><br />
				<label for="">Фамилия</label><br />
				<input type="text" name="surname"><br />
				<label for="">Дата рождения</label><br />
				<input type="date" name="birthday"><br />
				<input type="submit" name="submit">
			</form>
		</div>
	 </div>
	 <?php include('footer.php'); ?> 