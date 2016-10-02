<?php 

	include './main.php';

	$main = new Main;

	if(isset($_POST['submit']) {
		@$value = $_POST['submit'];
		
		$main->vote($value);
	}

?>