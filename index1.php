<!DOCTYPE html>
<html>
<head>
	<title>12 Days of Christmas</title>
	<link rel="stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <div class="image-title">
        <img src="image1.jpg">
    </div>
	<?php

        $counter = 0;

		if (isset($_POST['counter'])) {
			$counter = $_POST['counter'] + 1;
            $button = 'Next Day';
		}
		else {
			$counter = 0;
            $button = 'Start';
		};
        
		$day = [
			"1st" => "A Partridge in a Pear Tree",
			"2nd" => "Two Turtle Doves and A Partridge in a Pear Tree. ",
			"3rd" => "Three French Hens <br> Two Turtle Doves <br> and A Partridge in a Pear Tree. ",
			"4th" => "Four Calling Birds, <br> Three French <br> Hens Two Turtle Doves <br> and A Partridge in a Pear Tree.",
			"5th" => "Five Golden Rings, <br> Four Calling Birds, <br> Three French Hens <br> Two Turtle Doves  and <br> A Partridge in a Pear Tree.",
			"6th" => "Six Geese a Laying, <br> Five Golden Rings, <br> Four Calling Birds,<br> Three French Hens <br> Two Turtle Doves and A Partridge in a Pear Tree.",
			"7th" => "Sevens Swans a Swimming, <br>Six Geese a Laying, <br> Five Golden Rings,<br> Four Calling Birds, <br>Three French Hens<br> Two Turtle Doves and <br> A Partridge in a Pear Tree.",
			"8th" => "Eight Maids a Milking, <br> Sevens Swans a Swimming, <br> Six Geese a Laying,<br> Five Golden Rings,<br> Four Calling Birds, <br>Three French Hens <br> Two Turtle Doves and <br> A Partridge in a Pear Tree.",
			"9th" => "Nine Ladies Dancing,<br> Eight Maids a Milking, <br> Sevens Swans a Swimming,<br> Six Geese a Laying,<br> Five Golden Rings,<br> Four Calling Birds,<br> Three French Hens <br>Two Turtle Doves and<br> A Partridge in a Pear Tree.",
			"10th" => "Ten Lords a Leaping, <br>Nine Ladies Dancing, <br> Eight Maids a Milking,<br> Sevens Swans a Swimming,<br> Six Geese a Laying,<br> Five Golden Rings, <br>Four Calling Birds,<br> Three French Hens<br> Two Turtle Doves<br> and A Partridge in a Pear Tree.",
			"11th" => "Eleven Pipers Piping,<br> Ten Lords a Leaping, <br> Nine Ladies Dancing,<br> Eight Maids a Milking,<br> Sevens Swans a Swimming,<br> Six Geese a Laying,<br> Five Golden Rings,<br> Four Calling Birds, <br>Three French Hens<br> Two Turtle Doves and<br> A Partridge in a Pear Tree.",
			"12th" => "12 Drummers Drumming,<br> Eleven Pipers Piping, <br> Ten Lords a Leaping,<br> Nine Ladies Dancing,<br> Eight Maids a Milking,<br> Sevens Swans a Swimming,<br> Six Geese a Laying, <br> Five Golden Rings,<br> Four Calling Birds, <br>Three French Hens<br> Two Turtle Doves<br> and A Partridge in a Pear Tree.",
		];

        $day_counter = [
            null, "1st", "2nd", "3rd", "4th", "5th", "6th", "7th", "8th", "9th", "10th", "11th", "12th" 
        ];

        if ($counter <= 12) {
            foreach ($day as $key => $value)  {
                if ($key == $day_counter[$counter]) {
                    echo "<p> On the " . $key . " day of Christmas my true love sent to me: " . $value . " ";
                }
            }
        }

        else {
            $counter = 0;
            $button = 'Start';

        }

	?>

    <div class="button">
        <form method="POST">
            <input class="btn btn-success" type="submit" name="nextDay" value="<?php echo $button; ?>">
            <input type="hidden" name="counter" value="
                <?php echo $counter; ?>">
        </form>
    </div>




<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>