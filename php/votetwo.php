<?php 

	include './main.php';

	$main = new Main;

	// if(isset($_POST['prestwo']) {
	// 	@$value = $_POST['prestwo'];

	// 	$main->vote($value);
	// }

	$value = $_POST['submit'];

	$main->vote($value);

?>