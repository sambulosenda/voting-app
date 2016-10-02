<?php 

	include './main.php';

	$main = new Main;

	if(isset($_POST['president']) {
		@$value = $_POST['president'];

		echo $value;
		var_dump($value);
		die("i died");
		
		$main->vote($value);
	}

	// $value = 'prestwo';

	// $main->vote($value);

?>