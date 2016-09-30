<?php 
	echo "Hello world!"; 

	$file = "../data.votes.json"

	$json = json_decode(file_get_contents($file), true);

	echo $json;

?>