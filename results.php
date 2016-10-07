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
    <title>I Voted <?php echo $_COOKIE[$cookie_name] ?> for President! Who's your movie president pick?</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="Who's your presidential pick from the world of flicks? Vote here!">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:description" content="Who's your presidential pick from the world of flicks? Vote here!">
    <meta property="og:image" content="img/Movie-Presidents-Poll_Header.png">
    <meta property="og:url" content="https://protected-tor-77789.herokuapp.com">
    <meta property="og:type" content="article">
    <meta name="twitter:image" content="img/Movie-Presidents-Poll_Header.png">
    <meta name="twitter:card" content="img/Movie-Presidents-Poll_Header.png">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Artifika" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bevan" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" integrity="sha256-j+P6EZJVrbXgwSR5Mx+eCS6FvP9Wq27MBRC/ogVriY0=" crossorigin="anonymous" />
	<link href="./styles/main.css" rel="stylesheet">
</head>
<body>

	<header><img src="./img/Movie-Presidents-Poll_Header.png" class="img-responsive" /></header>

	<div class="container text-center">
		<h2>You Picked <span id="votedfor"><?php echo $_COOKIE[$cookie_name] ?></span> For President</h2>
		<h2 class="margin-bot60">Here's How Your Vote Stacks Up:</h2>
		<?php echo $info ?>
		<?php echo $info[0]["name"] ?>
		<?php echo $info[0]["votes"] ?>
		<?php echo $info[1]["name"] ?>
		<?php echo $info[1]["votes"] ?>
		<?php echo $info[2]["name"] ?>
		<?php echo $info[2]["votes"] ?>
		<?php echo $info[3]["name"] ?>
		<?php echo $info[3]["votes"] ?>
		<?php echo $info[0]["img"] ?>
		<?php echo "<img src='/img/" . $info[0]["img"] . "' class='pres-results-img'>"; ?>
	</div>

	<div id="results-sml" class="container">

		<div class="row">

			<div class="col-md-4 padding50 margin-bot60">
				<p id="ashersm" class="bannersm">LEADER</p>
				<img class="img-responsive" src="./img/eckhart.svg" />
				<p id="ashersm-c" class="bannersm-c">YOUR CANDIDATE</p>
				<div class="pull-left width60">
					<p class="results-pres-name"><?php echo $info[0]["name"] ?></p>
					<p class="results-mov-name">"Olympus Has Fallen" and "London Has Fallen"</p>
				</div>
				<div class="pull-right">
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total1 ?></span>%</h2>
				</div>
			</div>

			<div class="col-md-4 padding50 margin-bot60">
				<p id="becksm" class="bannersm">LEADER</p>
				<img class="img-responsive" src="./img/freeman.svg" />
				<p id="becksm-c" class="bannersm-c">YOUR CANDIDATE</p>
				<div class="pull-left width60">
					<p class="results-pres-name"><?php echo $info[1]["name"] ?></p>
					<p class="results-mov-name">"Deep Impact"</p>
				</div>
				<div class="pull-right">
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total2 ?></span>%</h2>
				</div>
			</div>

			<div class="col-md-4 padding50 margin-bot60">
				<p id="shepherdsm" class="bannersm">LEADER</p>
				<img class="img-responsive" src="./img/douglas.svg" />
				<p id="shepherdsm-c" class="bannersm-c">YOUR CANDIDATE</p>
				<div class="pull-left width60">
					<p class="results-pres-name"><?php echo $info[2]["name"] ?></p>
					<p class="results-mov-name">"The American President"</p>
				</div>
				<div class="pull-right">
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total3 ?></span>%</h2>
				</div>
			</div>

		</div>

		<div class="row">

			<div class="col-md-4 padding50 margin-bot60">
				<p id="camachosm" class="bannersm">LEADER</p>
				<img class="img-responsive" src="./img/crews.svg" />
				<p id="camachosm-c" class="bannersm-c">YOUR CANDIDATE</p>
				<div class="pull-left width60">
					<p class="results-pres-name"><?php echo $info[3]["name"] ?></p>
					<p class="results-mov-name">"Idiocracy"</p>
				</div>
				<div class="pull-right">
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total4 ?></span>%</h2>
				</div>
			</div>

			<div class="col-md-4 padding50 margin-bot60">
				<p id="whitmoresm" class="bannersm">LEADER</p>
				<img class="img-responsive" src="./img/pullman.svg" />
				<p id="whitmoresm-c" class="bannersm-c">YOUR CANDIDATE</p>
				<div class="pull-left width60">
					<p class="results-pres-name"><?php echo $info[4]["name"] ?></p>
					<p class="results-mov-name">"Independence Day"</p>
				</div>
				<div class="pull-right">
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total5 ?></span>%</h2>
				</div>
			</div>

			<div class="col-md-4 padding50 margin-bot60">
				<p id="bullworthsm" class="bannersm">LEADER</p>
				<img class="img-responsive" src="./img/beatty.svg" />
				<p id="bullworthsm-c" class="bannersm-c">YOUR CANDIDATE</p>
				<div class="pull-left width60">
					<p class="results-pres-name"><?php echo $info[5]["name"] ?></p>
					<p class="results-mov-name">"Bulworth"</p>
				</div>
				<div class="pull-right">
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total6 ?></span>%</h2>
				</div>
			</div>

		</div>

		<div class="row">

			<div class="col-md-4 padding50 margin-bot60">
				<p id="dalesm" class="bannersm">LEADER</p>
				<img class="img-responsive" src="./img/nicholson.svg" />
				<p id="dalesm-c" class="bannersm-c">YOUR CANDIDATE</p>
				<div class="pull-left width60">
					<p class="results-pres-name"><?php echo $info[6]["name"] ?></p>
					<p class="results-mov-name">"Mars Attacks"</p>
				</div>
				<div class="pull-right">
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total7 ?></span>%</h2>
				</div>
			</div>

			<div class="col-md-4 padding50 margin-bot60">
				<p id="lanfordsm" class="bannersm">LEADER</p>
				<img class="img-responsive" src="./img/ward.svg" />
				<p id="lanfordsm-c" class="bannersm-c">YOUR CANDIDATE</p>
				<div class="pull-left width60">
					<p class="results-pres-name"><?php echo $info[7]["name"] ?></p>
					<p class="results-mov-name">"Independence Day: Resurgence"</p>
				</div>
				<div class="pull-right">
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total8 ?></span>%</h2>
				</div>
			</div>

			<div class="col-md-4 padding50 margin-bot60">
				<p id="marshallsm" class="bannersm">LEADER</p>
				<img class="img-responsive" src="./img/ford.svg" />
				<p id="marshallsm-c" class="bannersm-c">YOUR CANDIDATE</p>
				<div class="pull-left width60">
					<p class="results-pres-name"><?php echo $info[8]["name"] ?></p>
					<p class="results-mov-name">"Air Force One"</p>
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
					<?php echo "<img src='/img/" . $info[0]["img"] . "' class='pres-results-img'>"; ?>
				</div>
				<div class="results-box-txt pull-left text-left">
					<p id="asher" class="banner" style="display: inline-block;">LEADER</p>
					<?php echo "<p id='" . $info[0]["bid"] . "' class='banner-c'>YOUR CANDIDATE</p>"; ?>
<!-- 					<p id="asher-c" class="banner-c">YOUR CANDIDATE</p> -->
					<p class="results-pres-name"><?php echo $info[0]["name"] ?></p>
					<p class="results-mov-name">"<?php echo $info[0]["movie"] ?>"</p>
					<h2 class="pull-left margin-top10"><span id="bav" class="counter"><?php $total0 = round (($info[0]['votes']/$sum)*100); ?><?php echo $total0 ?></span>%</h2>
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
					<?php echo "<img src='/img/" . $info[1]["img"] . "' class='pres-results-img'>"; ?>
				</div>
				<div class="results-box-txt pull-left text-left">
					<p id="beck" class="bannerl">LEADER</p>
					<?php echo "<p id='" . $info[1]["bid"] . "' class='bannerl-c'>YOUR CANDIDATE</p>"; ?>
					<p class="results-pres-name"><?php echo $info[1]["name"] ?></p>
					<p class="results-mov-name">"<?php echo $info[1]["movie"] ?>"</p>
					<h2 class="pull-left margin-top10"><span id="tbv" class="counter"><?php $total1 = round (($info[1]['votes']/$sum)*100); ?><?php echo $total1 ?></span>%</h2>
				</div>
			</div>
			<div class="col-md-4">
				<div class="results-box-img pull-left">
					<?php echo "<img src='/img/" . $info[2]["img"] . "' class='pres-results-img'>"; ?>
				</div>
				<div class="results-box-txt pull-left text-left">
					<p id="shepherd" class="banner">LEADER</p>
					<?php echo "<p id='" . $info[2]["bid"] . "' class='banner-c'>YOUR CANDIDATE</p>"; ?>
					<p class="results-pres-name"><?php echo $info[2]["name"] ?></p>
					<p class="results-mov-name">"<?php echo $info[2]["name"] ?>"</p>
					<h2 class="pull-left margin-top10"><span id="asv" class="counter"><?php $total2 = round (($info[2]['votes']/$sum)*100); ?><?php echo $total2 ?></span>%</h2>
				</div>
			</div>
			<div class="col-md-2">
			</div>
		</div>

		<div class="row margin-bot60">
			<div class="col-md-4">
				<div class="results-box-img pull-left">
					<?php echo "<img src='/img/" . $info[3]["img"] . "' class='pres-results-img'>"; ?>
				</div>
				<div class="results-box-txt pull-left text-left">
					<p id="camacho" class="bannerl">LEADER</p>
					<?php echo "<p id='" . $info[3]["bid"] . "' class='bannerl-c'>YOUR CANDIDATE</p>"; ?>
					<p class="results-pres-name"><?php echo $info[3]["name"] ?></p>
					<p class="results-mov-name">"<?php echo $info[3]["movie"] ?>"</p>
					<h2 class="pull-left margin-top10"><span id="pcv" class="counter"><?php $total3 = round (($info[3]['votes']/$sum)*100); ?><?php echo $total3 ?></span>%</h2>
				</div>
			</div>
			<div class="col-md-4">
<!-- 				<div class="arrow1-div">
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
				</div> -->
				<h1 class="results-title">Election<br />Results</h1>
				<img class="width70" src="./img/circle.svg" />
			</div>
			<div class="col-md-4">
				<div class="results-box-img pull-left">
					<?php echo "<img src='/img/" . $info[4]["img"] . "' class='pres-results-img'>"; ?>
				</div>
				<div class="results-box-txt pull-left text-left">
					<p id="whitmore" class="banner">LEADER</p>
					<?php echo "<p id='" . $info[4]["bid"] . "' class='banner-c'>YOUR CANDIDATE</p>"; ?>
					<p class="results-pres-name"><?php echo $info[4]["name"] ?></p>
					<p class="results-mov-name">"<?php echo $info[4]["movie"] ?>"</p>
					<h2 class="pull-left margin-top10"><span id="twv" class="counter"><?php $total4 = round (($info[4]['votes']/$sum)*100); ?><?php echo $total4 ?></span>%</h2>
				</div>
			</div>
		</div>

		<div class="row margin-bot60">
			<div class="col-md-1">
			</div>
			<div class="col-md-4">
				<div class="results-box-img pull-left">
					<?php echo "<img src='/img/" . $info[5]["img"] . "' class='pres-results-img'>"; ?>
				</div>
				<div class="results-box-txt pull-left text-left">
					<p id="bullworth" class="bannerl">LEADER</p>
					<?php echo "<p id='" . $info[5]["bid"] . "' class='bannerl-c'>YOUR CANDIDATE</p>"; ?>
					<p class="results-pres-name"><?php echo $info[5]["name"] ?></p>
					<p class="results-mov-name">"<?php echo $info[5]["movie"] ?>"</p>
					<h2 class="pull-left margin-top10"><span id="jbv" class="counter"><?php $total5 = round (($info[5]['votes']/$sum)*100); ?><?php echo $total5 ?></span>%</h2>
				</div>
			</div>
			<div class="col-md-2">
			</div>
			<div class="col-md-4">
				<div class="results-box-img pull-left">
					<?php echo "<img src='/img/" . $info[6]["img"] . "' class='pres-results-img'>"; ?>
				</div>
				<div class="results-box-txt pull-left text-left">
					<p id="dale" class="banner">LEADER</p>
					<?php echo "<p id='" . $info[6]["bid"] . "' class='banner-c'>YOUR CANDIDATE</p>"; ?>
					<p class="results-pres-name"><?php echo $info[6]["name"] ?></p>
					<p class="results-mov-name">"<?php echo $info[6]["movie"] ?>"</p>
					<h2 class="pull-left margin-top10"><span id="jdv" class="counter"><?php $total6 = round (($info[6]['votes']/$sum)*100); ?><?php echo $total6 ?></span>%</h2>
				</div>
			</div>
		</div>

		<div class="row margin-bot60">
			<div class="col-md-2">
			</div>
			<div class="col-md-4">
				<div class="results-box-img pull-left">
					<?php echo "<img src='/img/" . $info[7]["img"] . "' class='pres-results-img'>"; ?>
				</div>
				<div class="results-box-txt pull-left text-left">
					<p id="lanford" class="bannerl">LEADER</p>
					<?php echo "<p id='" . $info[7]["bid"] . "' class='bannerl-c'>YOUR CANDIDATE</p>"; ?>
					<p class="results-pres-name"><?php echo $info[7]["name"] ?></p>
					<p class="results-mov-name">"<?php echo $info[7]["movie"] ?>"</p>
					<h2 class="pull-left margin-top10"><span id="plv" class="counter"><?php $total7 = round (($info[7]['votes']/$sum)*100); ?><?php echo $total7 ?></span>%</h2>
				</div>
			</div>
			<div class="col-md-4">
				<div class="results-box-img pull-left">
					<?php echo "<img src='/img/" . $info[8]["img"] . "' class='pres-results-img'>"; ?>
				</div>
				<div class="results-box-txt pull-left text-left">
					<p id="marshall" class="banner">LEADER</p>
					<?php echo "<p id='" . $info[8]["bid"] . "' class='banner-c'>YOUR CANDIDATE</p>"; ?>
					<p class="results-pres-name"><?php echo $info[8]["name"] ?></p>
					<p class="results-mov-name">"<?php echo $info[8]["movie"] ?>"</p>
					<h2 class="pull-left margin-top10"><span id="jmv" class="counter"><?php $total8 = round (($info[8]['votes']/$sum)*100); ?><?php echo $total8 ?></span>%</h2>
				</div>
			</div>
			<div class="col-md-2">
			</div>
		</div>
	</div>

	<div class="container text-center">
		<h2 class="share-text text-center">Share Your Vote!</h2>
		<!-- AddThis Bottom Bar -->
		<div class="addthis_inline_share_toolbox"></div>
	</div>



<!-- jQuery 2.2.4 -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- Add This Social Sidebar -->
<script type="text/javascript" src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57edc3cdf2bfbbf7"></script>

<!-- Add This Social Bottom Bar-->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57edc3cdf2bfbbf7"></script>

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