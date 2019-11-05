<?php
$re = rand(1, 300);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
	<title>RANDOM</title>
	<style>
		body {
			background-color: #ff8c8c;
		}
		.center {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			font-size: 100px;
			color: #ffffff;
			font-family: 'Roboto Slab', serif;
		}
		.no-js #loader { display: none;  }
		.js #loader { display: block; position: absolute; left: 200px; top: 0; }
		.se-pre-con {
			position: fixed;
			left: 0px;
			top: 0px;
			width: 100%;
			height: 100%;
			z-index: 9999;
			background: url(https://loading.io/assets/img/hourglass.svg) center no-repeat #fff;
		}
	</style>
</head>
<body>
	<div class="se-pre-con"></div>

	<div class="center">
		<?php echo $re; ?>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
	<script>
		$(window).load( setTimeout(function() {
		$(".se-pre-con").fadeOut("slow");
		}, 3000));
	</script>
</body>
</html>
