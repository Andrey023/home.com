<?php 
include_once("../header.php");
?>

<div class="content">
<?php
$query = "INSERT INTO users VALUES(0, '".$_POST['login']."','".$_POST['pass']."', '".$_POST['name']."', '".$_POST['surname']."', '".$_POST['birthday']."','".$_POST['email']."')";
$result = mysqli_query($link, $query) or die('<p style="color:red">'.mysqli_connect_errno().' - '.mysqli_connect_error().'</p>');
header("Location: ../index.php");
?>
</div>