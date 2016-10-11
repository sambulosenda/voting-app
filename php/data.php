<?php 
	
	$json = file_get_contents("./data/votes.json");
	$data = json_decode($json, true);

	$info = $data['presidents'];

	$sum = 0;

	for ($i = 0; $i <= 8; $i++) {
   		 $sum += $info[$i]['votes'];
	}

	usort($info, function($a, $b) {
    	return $a["votes"] > $b["votes"] ? -1 : 1;
	});

	$total0 = round (($info[0]['votes']/$sum)*100);
	$total1 = round (($info[1]['votes']/$sum)*100);
	$total2 = round (($info[2]['votes']/$sum)*100);
	$total3 = round (($info[3]['votes']/$sum)*100);
	$total4 = round (($info[4]['votes']/$sum)*100);
	$total5 = round (($info[5]['votes']/$sum)*100);
	$total6 = round (($info[6]['votes']/$sum)*100);
	$total7 = round (($info[7]['votes']/$sum)*100);
	$total8 = round (($info[8]['votes']/$sum)*100);

?>