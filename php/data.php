<?php 

	$json = file_get_contents("./data/votes.json");
	$data = json_decode($json, true);

	$sum = $data['pres1']['votes'] + $data['prestwo']['votes'] + $data['presthree']['votes'] + $data['presfour']['votes'] + $data['presfive']['votes'] + $data['pressix']['votes'] + $data['presseven']['votes'] + $data['preseight']['votes'] + $data['presnine']['votes'];

	$totone = round (($data['presone']['votes']/$sum)*100);

?>