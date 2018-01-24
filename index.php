<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<title>Goede-PHP</title>
	</head>
	<body>
		<?php
		    date_default_timezone_set(timezone_name_from_abbr("", 3600, 0));
            $time = date("H");
            if ($time >= "6" && $time < "12") {
                echo '<h1 id="greet">Goede morgen!</h1>'.'<p id="time">Het is nu ' . date("H:i") . '</p>'.'<style> body{ background-image: url(backgrounds/morning.png)}</style>';
            } elseif ($time >= "12" && $time < "18") {
                echo '<h1 id="greet">Goede middag!</h1>'.'<p id="time">Het is nu ' . date("H:i") . '</p>'.'<style> body{ background-image: url(backgrounds/afternoon.png)}</style>';
            } elseif ($time >= "18" && $time <= "23") {
                echo '<h1 id="greet">Goede avond!</h1>'.'<p id="time">Het is nu ' . date("H:i") . '</p>'.'<style> body{ background-image: url(backgrounds/evening.png)}</style>';
            } elseif ($time < "6") {
                echo '<h1 id="greet">Goede nacht!</h1>'.'<p id="time">Het is nu ' . date("H:i") . '</p>'.'<style> body{ background-image: url(backgrounds/night.png)}</style>';
            }
		?>
	</body>
</html>