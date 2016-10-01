<?php
   include './php/results.php';
?>

<html>
<body>
<h1>Hello Insert</h1>
<h2><?php echo $yo ?></h2>
<h2><?php echo $data['presone']['votes'] ?></h2>
<h2><?php echo $data['prestwo']['votes'] ?></h2>

<!-- jQuery 3.1.1 -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script type="text/javascript" src="./js/main.js"></script>
</body>
</html>