<?php 

	include './data.php';

	class  Main {

		public function vote($pres) {
			global $data;
			$data[$pres]['votes']++;
			$newjson = json_encode($data);
			file_put_contents('../data/votes.json', $newjson);
			header('Location: ../results.php');
	    	exit;

		}
	}
	
?>

