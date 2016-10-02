<?php 

	include './main.php';

	$main = new Main;

	if(isset($_POST['president']) {
		$value = $_POST['president'];
		
		$main->vote($value);
	}

	// $value = 'prestwo';

	// $main->vote($value);

?>