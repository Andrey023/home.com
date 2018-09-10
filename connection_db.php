<?php 
	$user = "root";
	$pass_db = "167943";
	$host = 'localhost';
    $db   = 'narciss';
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
	$link = new PDO($dsn, $user, $pass_db);

// $link = mysqli_connect($host, $user, $pass_db);
// $select_db = mysqli_select_db($link, "narciss");
// mysqli_query($link, "SET NAMES 'utf8'");
?>