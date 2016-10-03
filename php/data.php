<?php 

	$json = file_get_contents("./data/votes.json");
	$data = json_decode($json, true);

	$sum = 0;

	for ($i = 1; $i <= 9; $i++) {
   		 $sum += $data['p' . $i]['votes'];
	}

	$totone = round (($data['p1']['votes']/$sum)*100);

?>