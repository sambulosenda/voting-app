<?php
   include './php/data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta-Information -->
    <title>Dream Election Survey Results</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="Elect the president of your dreams this November">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<link href="./styles/main.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<h1>Election Results</h1>
	<h2><?php echo $data['p1']['votes'] ?></h2>
	<h2><?php echo $data['p2']['votes'] ?></h2>
	<h2><?php echo $data['p3']['votes'] ?></h2>
	<h2><?php echo $data['p4']['votes'] ?></h2>
	<h2><?php echo $data['p5']['votes'] ?></h2>
	<h2><?php echo $data['p6']['votes'] ?></h2>
	<h2><?php echo $data['p7']['votes'] ?></h2>
	<h2><?php echo $data['p8']['votes'] ?></h2>
	<h2><?php echo $data['p9']['votes'] ?></h2>
	<h1>Percent 1</h1>
	<h2><?php echo $sum ?></h2>
	<h2><?php echo $totone ?></h2>
</div>

<!-- jQuery 3.1.1 -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- Add This Social Sidebar -->
<script type="text/javascript" src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57edc3cdf2bfbbf7"></script>

<script type="text/javascript" src="./js/main.js"></script>
</body>
</html>