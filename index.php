<?php

	$cookie_name = "election";

	if(isset($_COOKIE[$cookie_name])) {
    	header('Location: ./results.php');
	}

	include './php/sdata.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta-Information -->
    <title>Elect the president of your dreams this November</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="Elect the president of your dreams this November">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- font awesome -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

<!-- 	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Artifika" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bevan" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">

	<link href="./styles/main.css" rel="stylesheet">
</head>

<body>

	<header><img src="./img/Movie-Presidents-Poll_Header.png" class="img-responsive" /></header>

	<div class="container text-center">
		<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tincidunt metus et justo congue aliquet. In sit amet euismod magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum porta diam et orci luctus efficitur. Nunc laoreet pharetra orci, vel consectetur neque gravida sit amet. Vestibulum eget porttitor diam. Cras vitae elit vitae augue placerat molestie.</h4>
	</div>

	<div class="container">

		<div class="row">

			<div class="col-sm-4 text-center margin-bot60">
				<div class="minheight150">
					<div class="president-name-box">
						<h1 class="president-name">Benjamin Asher</h1>
						<h3 class="real-name">(Aaron Eckhart)</h3>
					</div>
					<h2 class="president-movie">Olympus Has Fallen and London Has Fallen</h2>
				</div>
				<img class="width90" src="./img/eckhart.svg" />
				<div class="row">
					<div class="col-xs-offset-1 col-xs-5 text-left">
						<h3>Pros</h3>
						<h4><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
						<h4><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
						<h4><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
					</div>
					<div class="col-xs-5 text-left pros-cons">
						<h3>Cons</h3>
						<h4><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
						<h4><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
						<h4><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
					</div>
				</div>
				<form action="./php/vote.php" method="POST">
				    <button id="p1" type="submit" name="submit" value="p1" class="button"><span class="vote-text">Vote</span></button>
				</form>
			</div>
			<div class="col-sm-4 text-center margin-bot60">
				<div class="minheight150">
					<div class="president-name-box">
						<h1 class="president-name">Tom Beck</h1>
						<h3 class="real-name">(Morgan Freeman)</h3>
					</div>
					<h2 class="president-movie">Deep Impact</h2>
				</div>
				<img class="width90" src="./img/freeman.svg" />
				<div class="row">
					<div class="col-xs-offset-1 col-xs-5 text-left">
						<h3>Pros</h3>
						<h4><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
						<h4><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
						<h4><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
					</div>
					<div class="col-xs-5 text-left pros-cons">
						<h3>Cons</h3>
						<h4><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
						<h4><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
						<h4><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
					</div>
				</div>
				<form action="./php/vote.php" method="POST">
		    		<button id="p2" type="submit" name="submit" value="p2" class="button"><span class="vote-text">Vote</span></button>
				</form>
			</div>
			<div class="col-sm-4 text-center margin-bot60">
				<div class="minheight140">
					<div class="president-name-box">
						<h1 class="president-name">Andrew Shepherd</h1>
						<h3 class="real-name">(Michael Douglas)</h3>
					</div>
					<h2 class="president-movie">The American President</h2>
				</div>
				<img class="width90" src="./img/douglas.svg" />
				<div class="row">
					<div class="col-xs-offset-1 col-xs-5 text-left">
						<h3>Pros</h3>
						<h4><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
						<h4><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
						<h4><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
					</div>
					<div class="col-xs-5 text-left pros-cons">
						<h3>Cons</h3>
						<h4><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
						<h4><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
						<h4><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
					</div>
				</div>
				<form action="./php/vote.php" method="POST">
		    		<button id="p3" type="submit" name="submit" value="p3" class="button"><span class="vote-text">Vote</span></button>
				</form>
			</div>

		</div>


		<div class="row">

			<div class="col-sm-4 text-center margin-bot60">
				<div class="minheight140">
					<div class="president-name-box">
						<h1 class="president-name">President Camacho</h1>
						<h3 class="real-name">(Terry Crews)</h3>
					</div>
					<h2 class="president-movie">Idiocracy</h2>
				</div>
				<img class="width90" src="./img/crews.svg" />
				<div class="row">
					<div class="col-xs-offset-1 col-xs-5 text-left">
						<h3>Pros</h3>
						<h4><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
						<h4><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
						<h4><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
					</div>
					<div class="col-xs-5 text-left pros-cons">
						<h3>Cons</h3>
						<h4><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
						<h4><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
						<h4><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
					</div>
				</div>
				<form action="./php/vote.php" method="POST">
				    <button id="p4" type="submit" name="submit" value="p4" class="button"><span class="vote-text">Vote</span></button>
				</form>
			</div>
			<div class="col-sm-4 text-center margin-bot60">
				<div class="minheight164">
					<div class="president-name-box">
						<h1 class="president-name">Thomas Whitmore</h1>
						<h3 class="real-name">(Bill Pullman)</h3>
					</div>
					<h2 class="president-movie">Independence Day</h2>
				</div>
				<img class="width90" src="./img/pullman.svg" />
				<div class="row">
					<div class="col-xs-offset-1 col-xs-5 text-left">
						<h3>Pros</h3>
						<h4><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
						<h4><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
						<h4><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
					</div>
					<div class="col-xs-5 text-left pros-cons">
						<h3>Cons</h3>
						<h4><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
						<h4><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
						<h4><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
					</div>
				</div>
				<form action="./php/vote.php" method="POST">
		    		<button id="p5" type="submit" name="submit" value="p5" class="button"><span class="vote-text">Vote</span></button>
				</form>
			</div>
			<div class="col-sm-4 text-center margin-bot60">
				<div class="minheight164">
					<div class="president-name-box">
						<h1 class="president-name">Jay Bullworth</h1>
						<h3 class="real-name">(Warren Beatty)</h3>
					</div>
					<h2 class="president-movie">Bullworth</h2>
				</div>
				<img class="width90" src="./img/beatty.svg" />
				<div class="row">
					<div class="col-xs-offset-1 col-xs-5 text-left">
						<h3>Pros</h3>
						<h4><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
						<h4><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
						<h4><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
					</div>
					<div class="col-xs-5 text-left pros-cons">
						<h3>Cons</h3>
						<h4><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
						<h4><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
						<h4><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
					</div>
				</div>
				<form action="./php/vote.php" method="POST">
		    		<button id="p6" type="submit" name="submit" value="p6" class="button"><span class="vote-text">Vote</span></button>
				</form>
			</div>

		</div>

		<div class="row">

			<div class="col-sm-4 text-center margin-bot60">
				<div class="minheight140">
					<div class="president-name-box">
						<h1 class="president-name">James Dale</h1>
						<h3 class="real-name">(Jack Nicholson)</h3>
					</div>
					<h2 class="president-movie">Mars Attacks</h2>
				</div>
				<img class="width90" src="./img/nicholson.svg" />
				<div class="row">
					<div class="col-xs-offset-1 col-xs-5 text-left">
						<h3>Pros</h3>
						<h4><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
						<h4><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
						<h4><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
					</div>
					<div class="col-xs-5 text-left pros-cons">
						<h3>Cons</h3>
						<h4><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
						<h4><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
						<h4><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
					</div>
				</div>
				<form action="./php/vote.php" method="POST">
				    <button id="p7" type="submit" name="submit" value="p7" class="button"><span class="vote-text">Vote</span></button>
				</form>
			</div>
			<div class="col-sm-4 text-center margin-bot60">
				<div class="minheight147">
					<div class="president-name-box">
						<h1 class="president-name">President Lanford</h1>
						<h3 class="real-name">(Sela Ward)</h3>
					</div>
					<h2 class="president-movie">Independence Day: Resurgence</h2>
				</div>
				<img class="width90" src="./img/ward.svg" />
				<div class="row">
					<div class="col-xs-offset-1 col-xs-5 text-left">
						<h3>Pros</h3>
						<h4><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
						<h4><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
						<h4><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
					</div>
					<div class="col-xs-5 text-left pros-cons">
						<h3>Cons</h3>
						<h4><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
						<h4><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
						<h4><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
					</div>
				</div>
				<form action="./php/vote.php" method="POST">
		    		<button id="p8" type="submit" name="submit" value="p8" class="button"><span class="vote-text">Vote</span></button>
				</form>
			</div>
			<div class="col-sm-4 text-center margin-bot60">
				<div class="minheight147">
					<div class="president-name-box">
						<h1 class="president-name">James Marshall</h1>
						<h3 class="real-name">(Harrison Ford)</h3>
					</div>
					<h2 class="president-movie">Air Force One</h2>
				</div>
				<img class="width90" src="./img/ford.svg" />
				<div class="row">
					<div class="col-xs-offset-1 col-xs-5 text-left">
						<h3>Pros</h3>
						<h4><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
						<h4><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
						<h4><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
					</div>
					<div class="col-xs-5 text-left pros-cons">
						<h3>Cons</h3>
						<h4><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
						<h4><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
						<h4><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Lorem ipsum dolor sit amet</h4>
					</div>
				</div>
				<form action="./php/vote.php" method="POST">
		    		<button id="p9" type="submit" name="submit" value="p9" class="button"><span class="vote-text">Vote</span></button>
				</form>
			</div>

		</div>


	<!-- jQuery 2.2.4 -->
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- Add This Social Sidebar -->
	<script type="text/javascript" src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57edc3cdf2bfbbf7"></script>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.2/underscore-min.js"></script>

</body>

</html>
