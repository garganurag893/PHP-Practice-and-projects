<?php
	define("TITLE", "Click Baits");
	include("functions.php");

	if (isset($_POST["fix-submit"])) {
		$arr = checkForClickBait();
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title><?php TITLE ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
</head>
<body>
	<div class="container">
		<h1><?php echo TITLE; ?></h1>

		<P class="lead">
			Hate Click Bait ?? Turn Those Headlines into meaningfull and realastic headlines using one simple program.
		</P>

		<div class="row">
			<form class="col-sm-8 col-sm-offset-2" action="" method="post">
				<div class="jumbotron">
					<textarea placeholder="Paste click bait headline here" class="form-control input-lg" name="clickbait_head"></textarea>
				</div>
				<button type="submit" class="btn btn-primary btn-lg pull-right" name="fix-submit">Make Honest!</button>
			</form>
		</div>
		<div class="container">
			<?php
				if (isset($_POST["fix-submit"])) {
					displayHonestHeadLine($arr[0], $arr[1]);
				}
			?>
		</div>

	</div>
	

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>