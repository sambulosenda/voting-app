<?php 

	$json = file_get_contents("./data/votes.json");
	$data = json_decode($json, true);
	
?>