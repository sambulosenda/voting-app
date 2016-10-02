<?php 

	include './main.php';

	$main = new Main;

	if(isset($_POST['president']) {
		@$value = $_POST['president'];

		$v = <<<'EOT' $value EOT;
		
		$main->vote($v);
	}

	// $value = 'prestwo';

	// $main->vote($value);

?>