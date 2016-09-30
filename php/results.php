<?php 
	echo "Hello world!"; 

	$yo = "yo yo yo";

	$path = "./data/votes.json";

	$data = file_get_contents("./data/votes.json");

	$json = json_decode(file_get_contents("./data/votes.json"), true);

?>