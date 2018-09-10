<?php
include_once('header.php');
?>
<?php include_once('connection_db.php') ?>
	<?php include_once('api.php') ?>
	<?php 
		$product = showproduct($link);
	?>
	<table border="2" width="auto" style="margin: 0 auto; text-align: center;">
		<tr>
			<th>id_articl</th>
			<th>name_title</th>
			<th>author</th>
			<th>title</th>
			<th>date</th>
			<th>time</th>
		</tr>
		<?php foreach ($product as $prod) { ?>
			<tr valign="center">
				<td><?php echo $prod['id_articl'] ?></td>
				<td><?php echo $prod['name_title'] ?></td>
				<td><?php echo $prod['author'] ?></td>
				<td><?php echo $prod['title'] ?></td>
				<td><?php echo $prod['date'] ?></td>
				<td><?php echo $prod['time'] ?></td>
				<td><a href="edit.php?id_articl=<?php echo $prod['id_articl'] ?>">Редактировать</a></td>
		</tr>
		<?php } ?>
		
	</table>
	<a href="index.php">
		<button>На главную</button>
	</a>
