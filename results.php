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
	</div>
	<div id="results" class="container">

		<div class="row margin-bot40">
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
				<div class="results-box-img pull-left">
					<img class="pres-results-img pull-right" src="./img/male.svg" />
				</div>
				<div class="results-box-txt pull-left text-left">
					<p class="results-pres-name">Benjamin Asher</p>
					<p class="results-mov-name">Olympus Has Fallen</p>
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total1 ?></span>%</h2>
				</div>
			</div>
			<div class="col-md-4">
			</div>
		</div>

		<div class="row margin-bot40">
			<div class="col-md-2">
			</div>
			<div class="col-md-4">
				<div class="results-box-img pull-left">
					<img class="pres-results-img pull-right" src="./img/male.svg" />
				</div>
				<div class="results-box-txt pull-left text-left">
					<p class="results-pres-name">Tom Beck</p>
					<p class="results-mov-name">Deep Impact</p>
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total2 ?></span>%</h2>
				</div>
			</div>
			<div class="col-md-4">
				<div class="results-box-img pull-left">
					<img class="pres-results-img pull-right" src="./img/male.svg" />
				</div>
				<div class="results-box-txt pull-left text-left">
					<p class="results-pres-name">Andrew Shepherd</p>
					<p class="results-mov-name">The American President</p>
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total3 ?></span>%</h2>
				</div>
			</div>
			<div class="col-md-2">
			</div>
		</div>

		<div class="row margin-bot40">
			<div class="col-md-4">
				<div class="results-box-img pull-left">
					<img class="pres-results-img pull-right" src="./img/male.svg" />
				</div>
				<div class="results-box-txt pull-left text-left">
					<p class="results-pres-name">President Camacho</p>
					<p class="results-mov-name">Idiocracy</p>
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total4 ?></span>%</h2>
				</div>
			</div>
			<div class="col-md-4 text-center">
			</div>
			<div class="col-md-4">
				<div class="results-box-img pull-left">
					<img class="pres-results-img pull-right" src="./img/male.svg" />
				</div>
				<div class="results-box-txt pull-left text-left">
					<p class="results-pres-name">Thomas Whitmore</p>
					<p class="results-mov-name">Independence Day</p>
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total5 ?></span>%</h2>
				</div>
			</div>
		</div>

		<div class="row margin-bot40">
			<div class="col-md-1 text-center">
			</div>
			<div class="col-md-4">
				<div class="results-box-img pull-left">
					<img class="pres-results-img pull-right" src="./img/male.svg" />
				</div>
				<div class="results-box-txt pull-left text-left">
					<p class="results-pres-name">Jay Bullworth</p>
					<p class="results-mov-name">Bullworth</p>
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total6 ?></span>%</h2>
				</div>
			</div>
			<div class="col-md-2 text-center">
			</div>
			<div class="col-md-4">
				<div class="results-box-img pull-left">
					<img class="pres-results-img pull-right" src="./img/male.svg" />
				</div>
				<div class="results-box-txt pull-left text-left">
					<p class="results-pres-name">James Dale</p>
					<p class="results-mov-name">Mars Attacks</p>
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total7 ?></span>%</h2>
				</div>
			</div>
		</div>

		<div class="row margin-bot40">
			<div class="col-md-2 text-center">
			</div>
			<div class="col-md-4">
				<div class="results-box-img pull-left">
					<img class="pres-results-img pull-right" src="./img/male.svg" />
				</div>
				<div class="results-box-txt pull-left text-left">
					<p class="results-pres-name">President Lanford</p>
					<p class="results-mov-name">Independence Day: Resurgence</p>
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total8 ?></span>%</h2>
				</div>
			</div>
			<div class="col-md-4">
				<div class="results-box-img pull-left">
					<img class="pres-results-img pull-right" src="./img/male.svg" />
				</div>
				<div class="results-box-txt pull-left text-left">
					<p class="results-pres-name">9th President</p>
					<p class="results-mov-name">Movie</p>
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total9 ?></span>%</h2>
				</div>
			</div>
			<div class="col-md-2 text-center">
			</div>
		</div>

	</div>

	<h2>Sum</h2>
	<h2><?php echo $sum ?></h2>

	<h2>All Votes</h1>
	<?php 
		for ($i = 1; $i <= 9; $i++) {
	   		 ?><h2><?php echo $data['p' . $i]['votes']; ?></h2>
	<?php } ?>

</div>

<!-- jQuery 2.2.4 -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- Add This Social Sidebar -->
<script type="text/javascript" src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57edc3cdf2bfbbf7"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="./js/jquery.counterup.min.js"></script>

<script>
$('.counter').counterUp({
    time: 1000
});
</script>

<!-- <script type="text/javascript" src="./js/main.js"></script> -->
</body>
</html>