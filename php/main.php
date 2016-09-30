<?php 
	echo "Hello world!"; 

	$file = file_get_contents("../data/votes.json");

	$data = file_get_contents("./data/votes.json");

	$json = json_decode(file_get_contents($data), true);

	echo $data;
	var_dump($json);

?>
