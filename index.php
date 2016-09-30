<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta-Information -->
    <title>Election Survey</title>
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
<header><img src="http://placehold.it/1980x500" class="img-responsive" /></header>

	<div class="container">
		<?php include('./php/main.php'); ?>
		<h1>Election Survey</h1>
		<input type="submit" class="button" name="insert" value="insert" />
		<input type="submit" class="button" name="select" value="select" />

		<form action="php/echo.php">
		    <input type="text" name="txt" />
		    <input type="submit" name="insert" value="insert" onclick="insert()" />
		    <input type="submit" name="select" value="select" onclick="select()" />
		</form>

		<h2>Would You Rather...</h2>
		<h3><i>Elect the president of your dreams this November</i></h3>
		<div class="row">
			<div class="col-md-4 text-center">
				<h2 class="president-name">Benjamin Asher (Aaron Eckhart)</h2>
				<h2 class="president-movie">Olympus Has Fallen and London Has Fallen</h2>
				<img src="./img/male.svg" />
				<button type="button" class="btn btn-primary">Primary</button>
			</div>
			<div class="col-md-4 align-center">
				<h2 class="president-name">Tom Beck (Morgan Freeman)</h2>
				<h2 class="president-movie">Deep Impact</h2>
				<img src="./img/male.svg" />
				<button type="button" class="btn btn-primary">Primary</button>
			</div>
			<div class="col-md-4 align-center">
				<h2 class="president-name">Andrew Shepherd (Michael Douglas)</h2>
				<h2 class="president-movie">The American President</h2>
				<img src="./img/male.svg" />
				<button type="button" class="btn btn-primary">Primary</button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 align-center">
				<h2 class="president-name">President Camacho (Terry Crews)</h2>
				<h2 class="president-movie">Idiocracy</h2>
				<img src="./img/male.svg" />
				<button type="button" class="btn btn-primary">Primary</button>
			</div>
			<div class="col-md-4 align-center">
				<h2 class="president-name">Thomas Whitmore (Bill Pullman)</h2>
				<h2 class="president-movie">Independence Day</h2>
				<img src="./img/male.svg" />
				<button type="button" class="btn btn-primary">Primary</button>
			</div>
			<div class="col-md-4 align-center">
				<h2 class="president-name">Jay Bullworth (Warren Beatty)</h2>
				<h2 class="president-movie">Bullworth</h2>
				<img src="./img/male.svg" />
				<button type="button" class="btn btn-primary">Primary</button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 align-center">
				<h2 class="president-name">James Dale (Jack Nicholson)</h2>
				<h2 class="president-movie">Mars Attacks</h2>
				<img src="./img/male.svg" />
				<button type="button" class="btn btn-primary">Primary</button>
			</div>
			<div class="col-md-4 align-center">
				<h2 class="president-name">President Lanford (Sela Ward)</h2>
				<h2 class="president-movie">Independence Day: Resurgence</h2>
				<img src="./img/male.svg" />
				<button type="button" class="btn btn-primary">Primary</button>
			</div>
			<div class="col-md-4 align-center">
				<h2 class="president-name">9th President</h2>
				<h2 class="president-movie">Movie</h2>
				<img src="./img/male.svg" />
				<button type="button" class="btn btn-primary">Primary</button>
			</div>
		</div>
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
