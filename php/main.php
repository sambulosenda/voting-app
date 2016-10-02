<?php 

	$json = file_get_contents("../data/votes.json");
	$data = json_decode($json, true);

	class  Main {

		public function vote($p) {
			global $data;
			$data[$p]['votes']++;
			$newjson = json_encode($data);
			file_put_contents('../data/votes.json', $newjson);
			header('Location: ../results.php');
	    	exit;

		}
	}
	
?>

