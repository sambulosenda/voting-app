<?php 

	$json = file_get_contents("../data/votes.json");
	$data = json_decode($json, true);
	$info = $data['presidents'];

	class  Main {

		public function vote($p) {
			global $info;
			$info[$p]['votes']++;
			$newjson = json_encode($info);
			file_put_contents('../data/votes.json', $newjson);
			
			$cookie_name = "election";
			$cookie_value = $info[$p]['name'];
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

			header('Location: ../results.php');
	    	exit;

		}
	}
	
?>

