<?php 
	
	$json = file_get_contents("./data/votes.json");
	$data = json_decode($json, true);

	$sum = 0;

	for ($i = 1; $i <= 9; $i++) {
   		 $sum += $data['p' . $i]['votes'];
	}

	$total1 = round (($data['p1']['votes']/$sum)*100);
	$total2 = round (($data['p2']['votes']/$sum)*100);
	$total3 = round (($data['p3']['votes']/$sum)*100);
	$total4 = round (($data['p4']['votes']/$sum)*100);
	$total5 = round (($data['p5']['votes']/$sum)*100);
	$total6 = round (($data['p6']['votes']/$sum)*100);
	$total7 = round (($data['p7']['votes']/$sum)*100);
	$total8 = round (($data['p8']['votes']/$sum)*100);
	$total9 = round (($data['p9']['votes']/$sum)*100);



	usort($data, function($a, $b) { //Sort the array using a user defined function
    	return $a->votes > $b->votes ? -1 : 1; //Compare the scores
	});

?>