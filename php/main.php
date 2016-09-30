<?php 
	echo "Hello world!"; 

	$file = file_get_contents("../data/votes.json");

	$json = json_decode(file_get_contents($file), true);

echo "var dump"; 
	var_dump($file);

echo "echo json"; 

	echo $json;

?>