<?php
session_start();
	
	if(!isset($_SESSION['zalogowany']))
		{
			header('Location: logowanie.php');
			exit();
		}	
	

?>
<!DOCTYPE html>

<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Homepage</title>
	<link rel="stylesheet" href="style_rejestracja.css" type="text/css" />
	
	<script src='https://www.google.com/recaptcha/api.js'></script>
	
</head>

<body>

<div id = "page">

	<div id = "gornyPanel">
		<div id = "logo"><img src="logo.jpg" /></div>
		<div id = "banner">
			<div id = "gornyBanner">Baner</div>
			
			
			<div id = "dolnyBanner">
				<button class="button2" style="vertical-align:middle"><span>Moje konto </span></button>

			
			</div>
		</div>
	</div>


	
<div id="button_pojazd">
<button class="button3" style="vertical-align:middle" onclick='window.location.href="check_pojazd.php"'><span>Dodaj usługę przewozu towaru </span></button>

</div>	

<div id="button_towar">
<button class="button3" style="vertical-align:middle" onclick='window.location.href="check_towar.php"'><span>Dodaj towar </span></button>

</div>

</body>	
	</html>  