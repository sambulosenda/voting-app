<?php 

	include './main.php';

	$main = new Main;

	$value = $_POST['submit'];

	$main->vote($value);

?>