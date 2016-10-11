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

	<div class="container content-width">

		<div class="text-center">
			<h2>You Picked <span id="votedfor"><?php echo $_COOKIE[$cookie_name] ?></span> For President</h2>
			<h2 class="margin-bot60">Here's How Your Vote Stacks Up:</h2>
		</div>

		<div class="row">

			<div class="col-sm-6 padding50 margin-bot60">
				<p id="ashersm" class="bannersm display-inline">LEADER</p>
				<p id="ashersm-c" class="bannersm-c">YOUR CANDIDATE</p>
				<?php echo "<p id='" . $info[0]["bids"] . "' class='bannersm-c'>YOUR CANDIDATE</p>"; ?>
				<?php echo "<img src='/img/" . $info[0]["img"] . "' class='img-responsive'>"; ?>
				<div class="pull-left width60">
					<p class="results-pres-name"><?php echo $info[0]["name"] ?></p>
					<p class="results-mov-name">"<?php echo $info[0]["movie"] ?>"</p>
				</div>
				<div class="pull-right">
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total0 ?></span>%</h2>
				</div>
			</div>

			<div class="col-sm-6 padding50 margin-bot60">
				<?php echo "<img src='/img/" . $info[1]["img"] . "' class='img-responsive'>"; ?>
				<?php echo "<p id='" . $info[1]["bids"] . "' class='bannersm-c'>YOUR CANDIDATE</p>"; ?>
				<div class="pull-left width60">
					<p class="results-pres-name"><?php echo $info[1]["name"] ?></p>
					<p class="results-mov-name">"<?php echo $info[1]["movie"] ?>"</p>
				</div>
				<div class="pull-right">
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total1 ?></span>%</h2>
				</div>
			</div>

		</div>

		<div class="row">

			<div class="col-sm-6 padding50 margin-bot60">
				<?php echo "<img src='/img/" . $info[2]["img"] . "' class='img-responsive'>"; ?>
				<?php echo "<p id='" . $info[2]["bids"] . "' class='bannersm-c'>YOUR CANDIDATE</p>"; ?>
				<div class="pull-left width60">
					<p class="results-pres-name"><?php echo $info[2]["name"] ?></p>
					<p class="results-mov-name">"<?php echo $info[2]["movie"] ?>"</p>
				</div>
				<div class="pull-right">
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total2 ?></span>%</h2>
				</div>
			</div>

			<div class="col-sm-6 padding50 margin-bot60">
				<?php echo "<img src='/img/" . $info[3]["img"] . "' class='img-responsive'>"; ?>
				<?php echo "<p id='" . $info[3]["bids"] . "' class='bannersm-c'>YOUR CANDIDATE</p>"; ?>
				<div class="pull-left width60">
					<p class="results-pres-name"><?php echo $info[3]["name"] ?></p>
					<p class="results-mov-name">"<?php echo $info[3]["movie"] ?>"</p>
				</div>
				<div class="pull-right">
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total3 ?></span>%</h2>
				</div>
			</div>

		</div>

		<div class="row">

			<div class="col-sm-6 padding50 margin-bot60">
				<?php echo "<img src='/img/" . $info[4]["img"] . "' class='img-responsive'>"; ?>
				<?php echo "<p id='" . $info[4]["bids"] . "' class='bannersm-c'>YOUR CANDIDATE</p>"; ?>
				<div class="pull-left width60">
					<p class="results-pres-name"><?php echo $info[4]["name"] ?></p>
					<p class="results-mov-name">"<?php echo $info[4]["movie"] ?>"</p>
				</div>
				<div class="pull-right">
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total4 ?></span>%</h2>
				</div>
			</div>

			<div class="col-sm-6 padding50 margin-bot60">
				<?php echo "<img src='/img/" . $info[5]["img"] . "' class='img-responsive'>"; ?>
				<?php echo "<p id='" . $info[5]["bids"] . "' class='bannersm-c'>YOUR CANDIDATE</p>"; ?>
				<div class="pull-left width60">
					<p class="results-pres-name"><?php echo $info[5]["name"] ?></p>
					<p class="results-mov-name">"<?php echo $info[5]["movie"] ?>"</p>
				</div>
				<div class="pull-right">
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total5 ?></span>%</h2>
				</div>
			</div>

		</div>

		<div class="row">

			<div class="col-sm-6 padding50 margin-bot60">
				<?php echo "<img src='/img/" . $info[6]["img"] . "' class='img-responsive'>"; ?>
				<?php echo "<p id='" . $info[6]["bids"] . "' class='bannersm-c'>YOUR CANDIDATE</p>"; ?>
				<div class="pull-left width60">
					<p class="results-pres-name"><?php echo $info[6]["name"] ?></p>
					<p class="results-mov-name">"<?php echo $info[6]["movie"] ?>"</p>
				</div>
				<div class="pull-right">
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total6 ?></span>%</h2>
				</div>
			</div>

			<div class="col-sm-6 padding50 margin-bot60">
				<?php echo "<img src='/img/" . $info[7]["img"] . "' class='img-responsive'>"; ?>
				<?php echo "<p id='" . $info[7]["bids"] . "' class='bannersm-c'>YOUR CANDIDATE</p>"; ?>
				<div class="pull-left width60">
					<p class="results-pres-name"><?php echo $info[7]["name"] ?></p>
					<p class="results-mov-name">"<?php echo $info[7]["movie"] ?>"</p>
				</div>
				<div class="pull-right">
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total7 ?></span>%</h2>
				</div>
			</div>

		</div>

		<div class="row">

			<div class="col-sm-6 padding50 margin-bot60">
				<?php echo "<img src='/img/" . $info[8]["img"] . "' class='img-responsive'>"; ?>
				<?php echo "<p id='" . $info[8]["bids"] . "' class='bannersm-c'>YOUR CANDIDATE</p>"; ?>
				<div class="pull-left width60">
					<p class="results-pres-name"><?php echo $info[8]["name"] ?></p>
					<p class="results-mov-name">"<?php echo $info[8]["movie"] ?>"</p>
				</div>
				<div class="pull-right">
					<h2 class="pull-left margin-top10"><span class="counter"><?php echo $total8 ?></span>%</h2>
				</div>
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
</body>
</html>