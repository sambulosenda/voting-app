<?php 
	echo "Hello world!"; 

	$yo = "yo yo yo";

	$path = "./data/votes.json";

	$json = file_get_contents("./data/votes.json");

	$data = json_decode(file_get_contents("./data/votes.json"), true);

?>