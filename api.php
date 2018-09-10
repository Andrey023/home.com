<?php 
	function showproduct($link){
		$comments = "SELECT * FROM `comments`";
		$res = array();
		$querry = $link->prepare($comments);
		$querry->execute();
		// echo "<pre>";
		// print_r($rez);
		// echo "</pre>";
		while ($row = $querry->fetch(PDO::FETCH_ASSOC)) {
			$res[$row['id_articl']] = $row;
		}
		return $res;
	}

	function getauthorbyId($link, $id_articl){
		$comments = "SELECT * FROM `comments`
			WHERE id_articl = :id_articl";
		$stmt = $link->prepare($comments);
		$stmt -> execute();
	}
 ?>
