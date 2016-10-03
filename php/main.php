<?php 

	$json = file_get_contents("../data/votes.json");
	$data = json_decode($json, true);

	class  Main {

		public function vote($p) {
			global $data;
			$data[$p]['votes']++;
			$newjson = json_encode($data);
			file_put_contents('../data/votes.json', $newjson);
			
			$cookie_name = "election";
			$cookie_value = $data[$p]['name'];
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

			header('Location: ../results.php');
	    	exit;

		}
	}
	
?>

