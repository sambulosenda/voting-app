<?php 

	include './functions.php';

		$json = file_get_contents("./data/votes.json");
		$data = json_decode(file_get_contents($json), true);

		$presOneVotes = $data['presone']['votes'];
 
		$data['presone']['votes'] = 15;
		$newJson = json_encode($data);
		file_put_contents('./data/votes.json', $newJson);
		header('Location: ../welcome.php');
    	exit;

?>