<?php 

	include './main.php';

	$main = new Main;

	$value = $_POST['submit'];

	$index = (int)$value;

	$main->vote($index);

?>