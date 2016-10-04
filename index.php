<?php

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

	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<link href="./styles/main.css" rel="stylesheet">
</head>

<body>
<header><img src="http://placehold.it/1980x500" class="img-responsive" /><h1 class="page-title"><span>Election Survey</span><br>Would You Rather...<br><span>Elect the president of your dreams this November</span></h1></header>

	<div class="container text-center">
		<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tincidunt metus et justo congue aliquet. In sit amet euismod magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum porta diam et orci luctus efficitur. Nunc laoreet pharetra orci, vel consectetur neque gravida sit amet. Vestibulum eget porttitor diam. Cras vitae elit vitae augue placerat molestie.</h4>
	</div>

	<div class="container">
	<?php 
		for ($i = 1; $i <= 9; $i++) { 
	?>
		<div class="col-sm-4 text-center margin-bot60">
				<h1 class="president-name minheight120"><?php echo $data['p' . $i]['name']; ?><br /><span><?php echo $data['p' . $i]['movie']; ?></span></h1>
				<img class="width70" src="./img/male.svg" />
				<img class="podium-top" src="./img/top-podium-s.png" />
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
				    <button id="<?php echo htmlspecialchars($data['p' . $i];); ?>" type="submit" name="submit" value="<?php echo htmlspecialchars($data['p' . $i];); ?>" class="button">I Vote <?php echo $data['p' . $i]['lname']; ?> for President</button>
				</form>
			</div>
	<?php } ?>

		<div class="row">

			<div class="col-sm-4 text-center margin-bot60">
				<h1 class="president-name minheight120">Benjamin Asher<br /><span>Olympus Has Fallen</span></h1>
				<img class="width70" src="./img/male.svg" />
				<img class="podium-top" src="./img/top-podium-s.png" />
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
				    <button id="p1" type="submit" name="submit" value="p1" class="button">I Vote Asher for President</button>
				</form>
			</div>
			<div class="col-sm-4 text-center margin-bot60">
				<h1 class="president-name minheight120">Tom Beck<br /><span>Deep Impact</span></h1>
				<img class="width70" src="./img/male.svg" />
				<img class="podium-top" src="./img/top-podium-s.png" />
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
		    		<button id="p2" type="submit" name="submit" value="p2" class="button">I Vote Beck for President</button>
				</form>
			</div>
			<div class="col-sm-4 text-center margin-bot60">
				<h1 class="president-name minheight120">Andrew Shepherd<br /><span>The American President</span></h1>
				<img class="width70" src="./img/male.svg" />
				<img class="podium-top" src="./img/top-podium-s.png" />
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
		    		<button id="p3" type="submit" name="submit" value="p3" class="button">I Vote Shepherd for President</button>
				</form>
			</div>

		</div>


		<div class="row">

			<div class="col-sm-4 text-center margin-bot60">
				<h1 class="president-name minheight120">President Camacho<br /><span>Idiocracy</span></h1>
				<img class="width70" src="./img/male.svg" />
				<img class="podium-top" src="./img/top-podium-s.png" />
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
				    <button id="p4" type="submit" name="submit" value="p4" class="button">I Vote Camacho for President</button>
				</form>
			</div>
			<div class="col-sm-4 text-center margin-bot60">
				<h1 class="president-name minheight120">Thomas Whitmore<br /><span>Independence Day</span></h1>
				<img class="width70" src="./img/male.svg" />
				<img class="podium-top" src="./img/top-podium-s.png" />
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
		    		<button id="p5" type="submit" name="submit" value="p5" class="button">I Vote Whitmore for President</button>
				</form>
			</div>
			<div class="col-sm-4 text-center margin-bot60">
				<h1 class="president-name minheight120">Jay Bullworth<br /><span>Bullworth</span></h1>
				<img class="width70" src="./img/male.svg" />
				<img class="podium-top" src="./img/top-podium-s.png" />
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
		    		<button id="p6" type="submit" name="submit" value="p6" class="button">I Vote Bullworth for President</button>
				</form>
			</div>

		</div>

		<div class="row">

			<div class="col-sm-4 text-center margin-bot60">
				<h1 class="president-name minheight120">James Dale<br /><span>Mars Attacks</span></h1>
				<img class="width70" src="./img/male.svg" />
				<img class="podium-top" src="./img/top-podium-s.png" />
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
				    <button id="p7" type="submit" name="submit" value="p7" class="button">I Vote Dale for President</button>
				</form>
			</div>
			<div class="col-sm-4 text-center margin-bot60">
				<h1 class="president-name minheight120">President Lanford<br /><span>Independence Day: Resurgence</span></h1>
				<img class="width70" src="./img/male.svg" />
				<img class="podium-top" src="./img/top-podium-s.png" />
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
		    		<button id="p8" type="submit" name="submit" value="p8" class="button">I Vote Lanford for President</button>
				</form>
			</div>
			<div class="col-sm-4 text-center margin-bot60">
				<h1 class="president-name minheight120">9th President<br /><span>Movie</span></h1>
				<img class="width70" src="./img/male.svg" />
				<img class="podium-top" src="./img/top-podium-s.png" />
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
		    		<button id="p9" type="submit" name="submit" value="p9" class="button">I Vote ABC for President</button>
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
	<script type="text/javascript" src="./js/main.js"></script>

</body>

</html>
