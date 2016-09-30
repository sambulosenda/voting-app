<?php 

	class  Main {

		$file = file_get_contents("../data/votes.json");
		$data = "../data/votes.json";
		$json = json_decode(file_get_contents($data), true);
 
		public function insert() {
			echo "<script type='text/javascript'>alert('$data');</script>";

			// header('Location: ../welcome.php');
	    	exit;
		}

		public function select() {
			header('Location: ../index.php');
	    	exit;
		}
	}
	
?>