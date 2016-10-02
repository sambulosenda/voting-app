<?php 

	include './main.php';

	$main = new Main;

	if(isset($_POST['president']) {
		@$value = $_POST['president'];

		$v = '' . $value . '';
		
		$main->vote($v);
	}

	// $value = 'prestwo';

	// $main->vote($value);

?>