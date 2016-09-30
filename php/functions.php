<?php 

	class  Main {

		$path = "./data/votes.json";
		$json = file_get_contents("./data/votes.json");
		$data = json_decode(file_get_contents($path), true);

		$presOneVotes = $data['presone']['votes'];
 
		public function insert() {
			$data['presone']['votes'] = 15;
			$newJsonString = json_encode($data);
			file_put_contents($path, $newJsonString);
			header('Location: ../welcome.php');
	    	exit;
		}

		public function select() {
			header('Location: ../index.php');
	    	exit;
		}
	}
	
?>