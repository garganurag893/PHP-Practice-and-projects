<?php define("TITLE", "PHP Array") ?>

<!DOCTYPE html>
<html>
<head>
	<title><?php TITLE ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
</head>
<body>
	<div class="container">
		<?php

			$dataPeople = array(
							"userName" => "Aryan",
							"age" => 18,
							"company" => "GeekyAnts"
						);

			echo $dataPeople["userName"] . "<br>";
			echo $dataPeople["age"] . "<br>";
			echo $dataPeople["company"] . "<br><hr><br>";


			$data = array(

				"Aryan" => array(
					"userName" => "Aryan",
					"age" => 20,
					"company" => "GeekyAnts"
				),

				"Sakshya" => array(
					"userName" => "Sakshya",
					"age" => 21,
					"company" => "GeekyAnts"
				)
			);

			echo "The age of Aryan is " . $data["Aryan"]["age"] . "<br>";
			echo "The age of Sakshya is " . $data["Sakshya"]["age"] . "<br>";

		?>
	</div>
	

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>