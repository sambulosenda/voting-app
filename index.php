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
    <title>Who's your presidential pick from the world of flicks? Vote here!</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="Elect the president of your dreams this November">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:site_name" content="Who's your presidential pick from the world of flicks? Vote here!">
    <meta property="og:title" content="Who's your presidential pick from the world of flicks? Vote here!">
    <meta property="og:description" content="Elect the president of your dreams this November">
    <meta property="og:image" content="img/Movie-Presidents-Poll_Header.png">
    <meta property="og:url" content="https://protected-tor-77789.herokuapp.com">
    <meta property="og:type" content="article">
    <meta name="twitter:site" content="Who's your presidential pick from the world of flicks? Vote here!">
    <meta name="twitter:title" content="Who's your presidential pick from the world of flicks? Vote here!">
    <meta name="twitter:description" content="Elect the president of your dreams this November">
    <meta name="twitter:image" content="img/Movie-Presidents-Poll_Header.png">
    <meta name="twitter:card" content="img/Movie-Presidents-Poll_Header.png">

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

	<div class="container content-width">

		<div class="text-center">
			<h4>Choosing who you want to vote for in November can be difficult. Between dull debates, attack ads, and all of those awkward family dinner disputes, presidential elections aren’t always as much fun as they could be. To increase the enjoyment, we compiled nine of the most prolific fictional film presidents. Check out their pros and cons below, and drop a ballot for the most constitutional character.</h4>
		</div>

		<div class="row">

			<div class="col-sm-6 text-center margin-bot60">
				<div>
					<div class="president-name-box">
						<h1 class="president-name">Benjamin Asher</h1>
						<h3 class="real-name">(Aaron Eckhart)</h3>
					</div>
					<h2 class="president-movie">"Olympus Has Fallen" and "London Has Fallen"</h2>
				</div>
				<img class="width90" src="./img/asher_podium.png" />
				<div class="row">
					<div class="col-xs-offset-1 col-xs-5 text-left">
						<h3>Pros</h3>
						<h4 class="pcfont"><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Represents solid family values while serving in the highest office.</h4>
						<h4 class="pcfont"><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Has a deadly Secret Service team.</h4>
						<h4 class="pcfont"><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Is willing to sacrifice himself ahead of his people.</h4>
					</div>
					<div class="col-xs-5 text-left pros-cons">
						<h3>Cons</h3>
						<h4 class="pcfont"><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Doesn't always invite the best guests into the White House. </h4>
						<h4 class="pcfont"><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Can’t seem to avoid danger.</h4>
						<h4 class="pcfont"><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Let the White House and Washington Monument be destroyed during his watch.</h4>
					</div>
				</div>
				<form action="./php/vote.php" method="POST">
				    <button id="p1" type="submit" name="submit" value="0" class="button"><div class="vote-b"><span class="vote-text">Vote</span></div></button>
				</form>
			</div>
			<div class="col-sm-6 text-center margin-bot60">
				<div class="minheight120">
					<div class="president-name-box">
						<h1 class="president-name">Tom Beck</h1>
						<h3 class="real-name">(Morgan Freeman)</h3>
					</div>
					<h2 class="president-movie">"Deep Impact"</h2>
				</div>
				<img class="width90" src="./img/beck_podium.png" />
				<div class="row">
					<div class="col-xs-offset-1 col-xs-5 text-left">
						<h3>Pros</h3>
						<h4 class="pcfont"><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Great forward thinker – hopes for the best, prepares for the worst. </h4>
						<h4 class="pcfont"><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Tells it like it is, regardless of the consequences; a true realist. </h4>
						<h4 class="pcfont"><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Nation rebuilder – he unites many countries after global tragedy. </h4>
					</div>
					<div class="col-xs-5 text-left pros-cons">
						<h3>Cons</h3>
						<h4 class="pcfont"><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Not great at managing mass hysteria.</h4>
						<h4 class="pcfont"><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Ageist. Only willing to save the lives of people 50 years old and under from a massive meteor.</h4>
						<h4 class="pcfont"><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Never indicates his stance on campaign finance reform.</h4>
					</div>
				</div>
				<form action="./php/vote.php" method="POST">
		    		<button id="p2" type="submit" name="submit" value="1" class="button"><div class="vote-b"><span class="vote-text">Vote</span></div></button>
				</form>
			</div>

		</div>

		<div class="row">

			<div class="col-sm-6 text-center margin-bot60">
				<div class="minheight160">
					<div class="president-name-box">
						<h1 class="president-name-desktop president-name">Andrew<br />Shepherd</h1>
						<h1 class="president-name-mobile">Andrew Shepherd</h1>
						<h3 class="real-name">(Michael Douglas)</h3>
					</div>
					<h2 class="president-movie">"The American President"</h2>
				</div>
				<img class="width90" src="./img/shepherd_podium.png" />
				<div class="row">
					<div class="col-xs-offset-1 col-xs-5 text-left">
						<h3>Pros</h3>
						<h4 class="pcfont"><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Still great with the ladies, despite the rigors of the job.</h4>
						<h4 class="pcfont"><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Successful as a single dad raising a teenager.</h4>
						<h4 class="pcfont"><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Great on the dance floor – and in a tux.</h4>
					</div>
					<div class="col-xs-5 text-left pros-cons">
						<h3>Cons</h3>
						<h4 class="pcfont"><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Hangs out with lobbyists in his spare time.</h4>
						<h4 class="pcfont"><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Draws too much attention to his personal life.</h4>
						<h4 class="pcfont"><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Likes to leave big decisions to the last minute for dramatic effect.</h4>
					</div>
				</div>
				<form action="./php/vote.php" method="POST">
		    		<button id="p3" type="submit" name="submit" value="2" class="button margintopv3"><div class="vote-b"><span class="vote-text">Vote</span></div></button>
				</form>
			</div>

			<div class="col-sm-6 text-center margin-bot60">
				<div class="minheight140">
					<div class="president-name-box">
						<h1 class="president-name">President Camacho</h1>
						<h3 class="real-name">(Terry Crews)</h3>
					</div>
					<h2 class="president-movie">"Idiocracy"</h2>
				</div>
				<img class="width90" src="./img/camacho_podium.png" />
				<div class="row">
					<div class="col-xs-offset-1 col-xs-5 text-left">
						<h3>Pros</h3>
						<h4 class="pcfont"><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Five-Time Ultimate Smack Down Champion.</h4>
						<h4 class="pcfont"><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Waters his plants with electrolytes.</h4>
						<h4 class="pcfont"><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Has a 3-point “Plan To Fix Everything.”</h4>
					</div>
					<div class="col-xs-5 text-left pros-cons">
						<h3>Cons</h3>
						<h4 class="pcfont"><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Fires automatic rifles during his State of the Union address.</h4>
						<h4 class="pcfont"><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Admits intelligence is not his strong suit.</h4>
						<h4 class="pcfont"><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; His three-point “Plan to Fix Everything” isn’t a real plan.</h4>
					</div>
				</div>
				<form action="./php/vote.php" method="POST">
				    <button id="p4" type="submit" name="submit" value="3" class="button"><div class="vote-b"><span class="vote-text">Vote</span></div></button>
				</form>
			</div>

		</div>


		<div class="row">

			<div class="col-sm-6 text-center margin-bot60">
				<div>
					<div class="president-name-box">
						<h1 class="president-name">Thomas Whitmore</h1>
						<h3 class="real-name">(Bill Pullman)</h3>
					</div>
					<h2 class="president-movie">"Independence Day"</h2>
				</div>
				<img class="width90" src="./img/whitmore_podium.png" />
				<div class="row">
					<div class="col-xs-offset-1 col-xs-5 text-left">
						<h3>Pros</h3>
						<h4 class="pcfont"><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; His speechmaking “will not go quietly into the night.”</h4>
						<h4 class="pcfont"><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Served as a pilot in the Gulf War - Experience that comes in handy.</h4>
						<h4 class="pcfont"><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Sees the full potential in every American. Even alcoholic crop dusters.</h4>
					</div>
					<div class="col-xs-5 text-left pros-cons">
						<h3>Cons</h3>
						<h4 class="pcfont"><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Not exactly in the know about anything.</h4>
						<h4 class="pcfont"><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Approval rating below 40% (before the alien invasion).</h4>
						<h4 class="pcfont"><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Leaves lots of important decisions to other people – like satellite technicians.</h4>
					</div>
				</div>
				<form action="./php/vote.php" method="POST">
		    		<button id="p5" type="submit" name="submit" value="4" class="button"><div class="vote-b"><span class="vote-text">Vote</span></div></button>
				</form>
			</div>
			<div class="col-sm-6 text-center margin-bot60">
				<div>
					<div class="president-name-box">
						<h1 class="president-name-desktop president-name">Jay<br />Bulworth</h1>
						<h1 class="president-name-mobile">Jay Bulworth</h1>
						<h3 class="real-name">(Warren Beatty)</h3>
					</div>
					<h2 class="president-movie">"Bulworth"</h2>
				</div>
				<img class="width90" src="./img/bulworth_podium.png" />
				<div class="row">
					<div class="col-xs-offset-1 col-xs-5 text-left">
						<h3>Pros</h3>
						<h4 class="pcfont"><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Doesn’t believe in political correctness.</h4>
						<h4 class="pcfont"><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Big mouth, bigger heart.</h4>
						<h4 class="pcfont"><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Not afraid to improvise a donation speech (or to rap it).</h4>
					</div>
					<div class="col-xs-5 text-left pros-cons">
						<h3>Cons</h3>
						<h4 class="pcfont"><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Doesn’t believe in political correctness.</h4>
						<h4 class="pcfont"><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Can’t hold a beat.</h4>
						<h4 class="pcfont"><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Polarizing character – makes other politicians want to shoot him (literally).</h4>
					</div>
				</div>
				<form action="./php/vote.php" method="POST">
		    		<button id="p6" type="submit" name="submit" value="5" class="button margintopv6"><div class="vote-b"><span class="vote-text">Vote</span></div></button>
				</form>
			</div>

		</div>

		<div class="row">

			<div class="col-sm-6 text-center margin-bot60">
				<div class="minheight174">
					<div class="president-name-box">
						<h1 class="president-name-desktop president-name">James<br />Dale</h1>
						<h1 class="president-name-mobile">James Dale</h1>
						<h3 class="real-name">(Jack Nicholson)</h3>
					</div>
					<h2 class="president-movie">"Mars Attacks!"</h2>
				</div>
				<img class="width90" src="./img/dale_podium.png" />
				<div class="row">
					<div class="col-xs-offset-1 col-xs-5 text-left">
						<h3>Pros</h3>
						<h4 class="pcfont"><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Willing to die for his country.</h4>
						<h4 class="pcfont"><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Strongly attempts at diplomatic resolutions, despite dangerous circumstances.</h4>
						<h4 class="pcfont"><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Believes in peace and humanity – even if the enemy isn’t human.</h4>
					</div>
					<div class="col-xs-5 text-left pros-cons">
						<h3>Cons</h3>
						<h4 class="pcfont"><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Not a good judge of alien character.</h4>
						<h4 class="pcfont"><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Not very timely at warning other nations of impending doom.</h4>
						<h4 class="pcfont"><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Unwilling to utilize violent measures against a violent enemy.</h4>
					</div>
				</div>
				<form action="./php/vote.php" method="POST">
				    <button id="p7" type="submit" name="submit" value="6" class="button"><div class="vote-b"><span class="vote-text">Vote</span></div></button>
				</form>
			</div>
			<div class="col-sm-6 text-center margin-bot60">
				<div class="minheight147">
					<div class="president-name-box">
						<h1 class="president-name">President Lanford</h1>
						<h3 class="real-name">(Sela Ward)</h3>
					</div>
					<h2 class="president-movie">"Independence Day: Resurgence"</h2>
				</div>
				<img class="width90" src="./img/lanford_podium.png" />
				<div class="row">
					<div class="col-xs-offset-1 col-xs-5 text-left">
						<h3>Pros</h3>
						<h4 class="pcfont"><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Willing to die for her country.</h4>
						<h4 class="pcfont"><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Not afraid to take a strong stand.</h4>
						<h4 class="pcfont"><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Knows her true enemy isn’t the other political party.</h4>
					</div>
					<div class="col-xs-5 text-left pros-cons">
						<h3>Cons</h3>
						<h4 class="pcfont"><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Makes irrational decisions when managing foreign policy.</h4>
						<h4 class="pcfont"><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Prone to violent outbursts under pressure.</h4>
						<h4 class="pcfont"><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Bad negotiation skills. </h4>
					</div>
				</div>
				<form action="./php/vote.php" method="POST">
		    		<button id="p8" type="submit" name="submit" value="7" class="button margintopv8"><div class="vote-b"><span class="vote-text">Vote</span></div></button>
				</form>
			</div>
		</div>

		<div class="row">

			<div class="col-sm-offset-3 col-sm-6 text-center margin-bot60">
				<div>
					<div class="president-name-box">
						<h1 class="president-name">James Marshall</h1>
						<h3 class="real-name">(Harrison Ford)</h3>
					</div>
					<h2 class="president-movie">"Air Force One"</h2>
				</div>
				<img class="width90" src="./img/marshall_podium.png" />
				<div class="row">
					<div class="col-xs-offset-1 col-xs-5 text-left">
						<h3>Pros</h3>
						<h4 class="pcfont"><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Really protective of his aircraft.</h4>
						<h4 class="pcfont"><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Knows how to handle a loaded weapon.</h4>
						<h4 class="pcfont"><i class="fa fa-plus fa-fw blue" aria-hidden="true"></i>&nbsp; Cool under pressure – and in high altitude.</h4>
					</div>
					<div class="col-xs-5 text-left pros-cons">
						<h3>Cons</h3>
						<h4 class="pcfont"><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Has a soft spot for his family – which his enemies know how to exploit.</h4>
						<h4 class="pcfont"><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Negotiates with a fist-first approach.</h4>
						<h4 class="pcfont"><i class="fa fa-minus fa-fw red" aria-hidden="true"></i>&nbsp; Prone to violence.</h4>
					</div>
				</div>
				<form action="./php/vote.php" method="POST">
		    		<button id="p9" type="submit" name="submit" value="8" class="button"><div class="vote-b"><span class="vote-text">Vote</span></div></button>
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
