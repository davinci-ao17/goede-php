<!doctype html>
<html>
	<head>
		<title>Goede... PHP</title>
		<meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
        <?php
            date_default_timezone_set(timezone_name_from_abbr("", 3600, 0));
            $time = date("H");
            if ($time >= "6" && $time < "12") {
                echo "<p id='message'>Goede Morgen!</p> <img src='Images/morning.png'> <p id='time'>Het is nu: " . date("H:i") . "</p>";
            }elseif ($time >= "12" && $time < "18") {
                echo "<p id='message'>Goede Middag!</p> <img src='Images/afternoon.png'> <p id='time'>Het is nu: " . date("H:i") . "</p>";
            }elseif ($time >= "18" && $time <= "23") {
                echo "<p id='message'>Goede Avond!</p> <img src='Images/evening.png'> <p id='time'>Het is nu: " . date("H:i") . "</p>";
            }elseif ($time <= "6") {
                echo "<p id='message'>Goede Nacht!</p> <img src='Images/night.png'> <p id='time'>Het is nu: " . date("H:i") . "</p>";
            }
        ?>
    </body>
</html>