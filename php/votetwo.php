<?php 

	include './main.php';

	$main = new Main;

	if(isset($_POST['president']) {
		@$value = $_POST['president'];

		if(empty($value)) {
			echo "hello";
		} else {
  			$main->vote($value);
		}
	}

	// $value = 'prestwo';

	// $main->vote($value);

?>