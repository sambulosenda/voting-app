<?php

	$cookie_name = "election";

	if(!isset($_COOKIE[$cookie_name])) {
    	header('Location: ./index.php');
	} else {
	    $cookie_value = $_COOKIE[$cookie_name];
	}

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
	<link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Artifika" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" integrity="sha256-j+P6EZJVrbXgwSR5Mx+eCS6FvP9Wq27MBRC/ogVriY0=" crossorigin="anonymous" />
	<link href="./styles/main.css" rel="stylesheet">
</head>
<body>

<header><img src="https://placehold.it/1980x500" class="img-responsive" /><h1 class="page-title"><span>Election Results</h1></header>

	<div class="container text-center">
		<h2>You Picked <span id="votedfor"><?php echo $_COOKIE[$cookie_name] ?></span> For President</h2>
		<h2 class="margin-bot60">Here's How Your Vote Stacks Up</h2>
	</div>

	<div id="results-sml" class="container">

		<div class="row">

			<div class="col-md-4 padding50 margin-bot60">
				<p id="ashersm" class="bannersm">LEADER</p>
				<img class="img-responsive" src="./img/male.svg" />
				<p id="ashersm-c" class="bannersm-c">YOUR CANDIDATE</p>
				<div class="pull-left width60">
					<p class="results-pres-name">Benjamin Asher</p>
					<p class="results-mov-name">Olympus Has Fallen</p>
				</div>
				<div class="pull-right">
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total1 ?></span>%</h2>
				</div>
			</div>

			<div class="col-md-4 padding50 margin-bot60">
				<p id="becksm" class="bannersm">LEADER</p>
				<img class="img-responsive" src="./img/male.svg" />
				<p id="becksm-c" class="bannersm-c">YOUR CANDIDATE</p>
				<div class="pull-left width60">
					<p class="results-pres-name">Tom Beck</p>
					<p class="results-mov-name">Deep Impact</p>
				</div>
				<div class="pull-right">
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total2 ?></span>%</h2>
				</div>
			</div>

			<div class="col-md-4 padding50 margin-bot60">
				<p id="shepherdsm" class="bannersm">LEADER</p>
				<img class="img-responsive" src="./img/male.svg" />
				<p id="shepherdsm-c" class="bannersm-c">YOUR CANDIDATE</p>
				<div class="pull-left width60">
					<p class="results-pres-name">Andrew Shepherd</p>
					<p class="results-mov-name">The American President</p>
				</div>
				<div class="pull-right">
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total3 ?></span>%</h2>
				</div>
			</div>

		</div>

		<div class="row">

			<div class="col-md-4 padding50 margin-bot60">
				<p id="camachosm" class="bannersm">LEADER</p>
				<img class="img-responsive" src="./img/male.svg" />
				<p id="camachosm-c" class="bannersm-c">YOUR CANDIDATE</p>
				<div class="pull-left width60">
					<p class="results-pres-name">President Camacho</p>
					<p class="results-mov-name">Idiocracy</p>
				</div>
				<div class="pull-right">
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total4 ?></span>%</h2>
				</div>
			</div>

			<div class="col-md-4 padding50 margin-bot60">
				<p id="whitmoresm" class="bannersm">LEADER</p>
				<img class="img-responsive" src="./img/male.svg" />
				<p id="whitmoresm-c" class="bannersm-c">YOUR CANDIDATE</p>
				<div class="pull-left width60">
					<p class="results-pres-name">Thomas Whitmore</p>
					<p class="results-mov-name">Independence Day</p>
				</div>
				<div class="pull-right">
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total5 ?></span>%</h2>
				</div>
			</div>

			<div class="col-md-4 padding50 margin-bot60">
				<p id="bullworthsm" class="bannersm">LEADER</p>
				<img class="img-responsive" src="./img/male.svg" />
				<p id="bullworthsm-c" class="bannersm-c">YOUR CANDIDATE</p>
				<div class="pull-left width60">
					<p class="results-pres-name">Jay Bullworth</p>
					<p class="results-mov-name">Bullworth</p>
				</div>
				<div class="pull-right">
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total6 ?></span>%</h2>
				</div>
			</div>

		</div>

		<div class="row">

			<div class="col-md-4 padding50 margin-bot60">
				<p id="dalesm" class="bannersm">LEADER</p>
				<img class="img-responsive" src="./img/male.svg" />
				<p id="dalesm-c" class="bannersm-c">YOUR CANDIDATE</p>
				<div class="pull-left width60">
					<p class="results-pres-name">James Dale</p>
					<p class="results-mov-name">Mars Attacks</p>
				</div>
				<div class="pull-right">
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total7 ?></span>%</h2>
				</div>
			</div>

			<div class="col-md-4 padding50 margin-bot60">
				<p id="lanfordsm" class="bannersm">LEADER</p>
				<img class="img-responsive" src="./img/male.svg" />
				<p id="lanfordsm-c" class="bannersm-c">YOUR CANDIDATE</p>
				<div class="pull-left width60">
					<p class="results-pres-name">President Lanford</p>
					<p class="results-mov-name">Independence Day: Resurgence</p>
				</div>
				<div class="pull-right">
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total8 ?></span>%</h2>
				</div>
			</div>

			<div class="col-md-4 padding50 margin-bot60">
				<p id="marshallsm" class="bannersm">LEADER</p>
				<img class="img-responsive" src="./img/male.svg" />
				<p id="marshallsm-c" class="bannersm-c">YOUR CANDIDATE</p>
				<div class="pull-left width60">
					<p class="results-pres-name">James Marshall</p>
					<p class="results-mov-name">Air Force One</p>
				</div>
				<div class="pull-right">
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total9 ?></span>%</h2>
				</div>
			</div>

		</div>

	</div>

	<div id="results" class="container">

		<div class="row margin-bot60">
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
				<div class="results-box-img pull-left">
					<img class="pres-results-img pull-right" src="./img/male.svg" />
				</div>
				<div class="results-box-txt pull-left text-left">
					<p id="asher" class="banner">LEADER</p>
					<p id="asher-c" class="banner-c">YOUR CANDIDATE</p>
					<p class="results-pres-name">Benjamin Asher</p>
					<p class="results-mov-name">Olympus Has Fallen</p>
					<h2 class="pull-left margin-top10"><span id="bav" class="counter"><?php echo $total1 ?></span>%</h2>
				</div>
			</div>
			<div class="col-md-4">
			</div>
		</div>

		<div class="row margin-bot60">
			<div class="col-md-2">
			</div>
			<div class="col-md-4">
				<div class="results-box-img pull-left">
					<img class="pres-results-img pull-right" src="./img/male.svg" />
				</div>
				<div class="results-box-txt pull-left text-left">
					<p id="beck" class="bannerl">LEADER</p>
					<p id="beck-c" class="bannerl-c">YOUR CANDIDATE</p>
					<p class="results-pres-name">Tom Beck</p>
					<p class="results-mov-name">Deep Impact</p>
					<h2 class="pull-left margin-top10"><span id="tbv" class="counter"><?php echo $total2 ?></span>%</h2>
				</div>
			</div>
			<div class="col-md-4">
				<div class="results-box-img pull-left">
					<img class="pres-results-img pull-right" src="./img/male.svg" />
				</div>
				<div class="results-box-txt pull-left text-left">
					<p id="shepherd" class="banner">LEADER</p>
					<p id="shepherd-c" class="banner-c">YOUR CANDIDATE</p>
					<p class="results-pres-name">Andrew Shepherd</p>
					<p class="results-mov-name">The American President</p>
					<h2 class="pull-left margin-top10"><span id="asv" class="counter"><?php echo $total3 ?></span>%</h2>
				</div>
			</div>
			<div class="col-md-2">
			</div>
		</div>

		<div class="row margin-bot60">
			<div class="col-md-4">
				<div class="results-box-img pull-left">
					<img class="pres-results-img pull-right" src="./img/male.svg" />
				</div>
				<div class="results-box-txt pull-left text-left">
					<p id="camacho" class="bannerl">LEADER</p>
					<p id="camacho-c" class="bannerl-c">YOUR CANDIDATE</p>
					<p class="results-pres-name">President Camacho</p>
					<p class="results-mov-name">Idiocracy</p>
					<h2 class="pull-left margin-top10"><span id="pcv" class="counter"><?php echo $total4 ?></span>%</h2>
				</div>
			</div>
			<div class="col-md-4">
				<div class="arrow1-div">
					<div class="arrow-red"></div>
					<div class="arrow1-stem"></div>
				</div>
				<div class="arrow2-div">
					<div class="arrow-blue"></div>
					<div class="arrow2-stem"></div>
				</div>
				<div class="arrow3-div">
					<div class="arrow-blue"></div>
					<div class="arrow3-stem"></div>
				</div>
				<div class="arrow4-div">
					<div class="arrow-red"></div>
					<div class="arrow4-stem"></div>
				</div>
				<div class="arrow5-div">
					<div class="arrow-red"></div>
					<div class="arrow5-stem"></div>
				</div>
				<div class="arrow6-div">
					<div class="arrow-blue"></div>
					<div class="arrow6-stem"></div>
				</div>
				<div class="arrow7-div">
					<div class="arrow-blue"></div>
					<div class="arrow7-stem"></div>
				</div>
				<div class="arrow8-div">
					<div class="arrow-red"></div>
					<div class="arrow8-stem"></div>
				</div>
				<div class="arrow9-div">
					<div class="arrow-red"></div>
					<div class="arrow9-stem"></div>
				</div>
				<h1 class="results-title">Election<br />Results</h1>
				<img class="width70" src="./img/circle.svg" />
			</div>
			<div class="col-md-4">
				<div class="results-box-img pull-left">
					<img class="pres-results-img pull-right" src="./img/male.svg" />
				</div>
				<div class="results-box-txt pull-left text-left">
					<p id="whitmore" class="banner">LEADER</p>
					<p id="whitmore-c" class="banner-c">YOUR CANDIDATE</p>
					<p class="results-pres-name">Thomas Whitmore</p>
					<p class="results-mov-name">Independence Day</p>
					<h2 class="pull-left margin-top10"><span id="twv" class="counter"><?php echo $total5 ?></span>%</h2>
				</div>
			</div>
		</div>

		<div class="row margin-bot60">
			<div class="col-md-1">
			</div>
			<div class="col-md-4">
				<div class="results-box-img pull-left">
					<img class="pres-results-img pull-right" src="./img/male.svg" />
				</div>
				<div class="results-box-txt pull-left text-left">
					<p id="bullworth" class="bannerl">LEADER</p>
					<p id="bullworth-c" class="bannerl-c">YOUR CANDIDATE</p>
					<p class="results-pres-name">Jay Bullworth</p>
					<p class="results-mov-name">Bullworth</p>
					<h2 class="pull-left margin-top10"><span id="jbv" class="counter"><?php echo $total6 ?></span>%</h2>
				</div>
			</div>
			<div class="col-md-2">
			</div>
			<div class="col-md-4">
				<div class="results-box-img pull-left">
					<img class="pres-results-img pull-right" src="./img/male.svg" />
				</div>
				<div class="results-box-txt pull-left text-left">
					<p id="dale" class="banner">LEADER</p>
					<p id="dale-c" class="banner-c">YOUR CANDIDATE</p>
					<p class="results-pres-name">James Dale</p>
					<p class="results-mov-name">Mars Attacks</p>
					<h2 class="pull-left margin-top10"><span id="jdv" class="counter"><?php echo $total7 ?></span>%</h2>
				</div>
			</div>
		</div>

		<div class="row margin-bot60">
			<div class="col-md-2">
			</div>
			<div class="col-md-4">
				<div class="results-box-img pull-left">
					<img class="pres-results-img pull-right" src="./img/male.svg" />
				</div>
				<div class="results-box-txt pull-left text-left">
					<p id="lanford" class="bannerl">LEADER</p>
					<p id="lanford-c" class="bannerl-c">YOUR CANDIDATE</p>
					<p class="results-pres-name">President Lanford</p>
					<p class="results-mov-name">Independence Day: Resurgence</p>
					<h2 class="pull-left margin-top10"><span id="plv" class="counter"><?php echo $total8 ?></span>%</h2>
				</div>
			</div>
			<div class="col-md-4">
				<div class="results-box-img pull-left">
					<img class="pres-results-img pull-right" src="./img/male.svg" />
				</div>
				<div class="results-box-txt pull-left text-left">
					<p id="marshall" class="banner">LEADER</p>
					<p id="marshall-c" class="banner-c">YOUR CANDIDATE</p>
					<p class="results-pres-name">James Marshall</p>
					<p class="results-mov-name">Air Force One</p>
					<h2 class="pull-left margin-top10"><span id="jmv" class="counter"><?php echo $total9 ?></span>%</h2>
				</div>
			</div>
			<div class="col-md-2">
			</div>
		</div>

	</div>

</div>

<!-- jQuery 2.2.4 -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- Add This Social Sidebar -->
<script type="text/javascript" src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57edc3cdf2bfbbf7"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="./js/jquery.counterup.min.js"></script>
<script src="./js/main.js"></script>

<script>
$('.counter').counterUp({
    time: 1000
});
</script>

<!-- <script type="text/javascript" src="./js/main.js"></script> -->
</body>
</html>