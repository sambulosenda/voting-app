<?php 

	class  Main {
 
		public function insert() {
			$json = file_get_contents("../data/votes.json");
			$data = json_decode($json, true);
			$data['presone']['votes'] = 15;
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