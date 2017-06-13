<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<!-- <div id = "lyrics">
		<h3> On the </h3>
		<h3> day of Christmas my true love sent to me: </h3>
		<h3> in a Pear Tree. </h3>
	</div> -->

	<div class="button">
		<form method="POST">
			<input class="btn" type="submit" name="Next Day">

			<input type="hidden" name="counter" value="<?php echo "$counter"; ?>">
		</form>
	</div>

	<?php

	if (isset($_POST['counter'])) {
		$counter = $_POST['counter'] + 1;
	}
	else {
		$counter = 0;
	}

	$current_day = $_POST['counter'];
	$day = [
		"A Partridge" => "1st",
		"Two Turtle Doves" => "2nd",
		"Three French Hens" => "3rd",
		"Four Calling Birds" => "4th",
		"Five Golden Rings" => "5th",
		"Six Geese a Laying" => "6th",
		"Sevens Swans a Swimming" => "7th",
		"Eight Maids a Milking" => "8th",
		"Nine Ladies Dancing" => "9th",
		"Ten Lords a Leaping" => "10th",
		"Eleven Pipers Piping" => "11th",
		"12 Drummers Drumming" => "12th",
		];

	//Traversing Names
	foreach ($day as $key => $day_number)
		{
		if ($day_number == $current_day) {
			echo $key . " " . $lyrics;
		}
	}

	?>

	<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>