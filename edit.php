<div class="content">
	<?php include_once('connection_db.php') ?>
	<?php include_once('api.php') ?>
	<?php 
		$product = showproduct($link);
	?>
	<form action="save.php" method="post">
		<input type="text"><br /><br />
		<div>
			<label for="name">Автор</label>
			<input type="text" id="name" name="name" value="<?php echo $prod['author'] ?>">
		</div>
	</form>
</div>