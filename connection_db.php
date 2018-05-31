<?php 
$host = 'localhost';
$user = "root";
$pass_db = "167943";

$link = mysqli_connect($host, $user, $pass_db);
mysqli_query($link, "SET NAMES utf8");
$select_db = mysqli_select_db($link, "Site_DB");

?>