<?php 

	$json = file_get_contents("../data/votes.json");
	$data = json_decode($json, true);

	class  Main {

		public function insert() {
			global $data;
			$data['presone']['votes']++;
			$newjson = json_encode($data);
			file_put_contents('../data/votes.json', $newjson);
			header('Location: ../welcome.php');
	    	exit;
		}

		public function select() {
			header('Location: ../index.php');
	    	exit;
		}
	}
	
?>
