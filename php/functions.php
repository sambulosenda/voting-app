<?php 

	class  Main {

		$path = "./data/votes.json";
		$json = file_get_contents("./data/votes.json");
		$data = json_decode(file_get_contents($path), true);

		$presOneVotes = $data['presone']['votes'];
 
		public function insert() {

		$contents = file_get_contents('./data/votes.json');
		 
		//Decode the JSON data into a PHP array.
		$contentsDecoded = json_decode($contents, true);
		 
		//Modify the counter variable.
		$contentsDecoded['counter']++;
		 
		//Encode the array back into a JSON string.
		$json = json_encode($contentsDecoded);
		 
		//Save the file.
		file_put_contents('./data/votes.json', $json);


			
			// $data['presone']['votes'] = 15;
			// $newJson = json_encode($data);
			// file_put_contents('./data/votes.json', $newJson);
			header('Location: ../welcome.php');
	    	exit;
		}

		public function select() {
			header('Location: ../index.php');
	    	exit;
		}
	}
	
?>