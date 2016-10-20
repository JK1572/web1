<?php
	session_start();
	
	if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true))
		{	
			header('Location: indexl.php');
			exit();
		}
	
	
	
		
		
	
	
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Homepage</title>
	<link rel="stylesheet" href="style_rejestracja.css" type="text/css" />
	
	<script src='https://www.google.com/recaptcha/api.js'></script>
	
</head>

<body>
<div id ="page" style="page">
	<div id = "gornyPanel">
		<div id = "logo"><img src="logo.jpg" />
		</div>
		<div id = "banner">
			<div id = "gornyBanner">Baner</div>
			
			
			<div id = "dolnyBanner">
				<button class="button2" style="vertical-align:middle"><span>Moje konto </span></button>

			
			</div>
		</div>
	</div>


	
	
	
<div id = "logowanie"  >
	
	<form action="loging.php" method="post">
	
		<input type = "text" name ="email" class = "inputborder" placeholder="Login" />
		<br/>
		<br/>
		<input type = "password" name = "haslo" class = "inputborder" placeholder="Hasło" />
		<br/>
		<br/>
		<input type="submit" class="button" value="Zaloguj" />
		
		<div id="blad">
			<?php
					if(isset($_SESSION['$blad']))
					{
				
					echo	$_SESSION['$blad'];
					}
	
			?>
		
	</div>
		
	<form/>
		
	
			
</div> 

	<div id="send_to_registry" >
	
		<div id="text">
			<p>Zaloz Darmowe konto juz dzis!</p>
		
		</div>
	
		<div id="przycisk_rejestracji" >
	
			<input type="button"  class= "button" value="Zarejestruj sie!"
			onclick='window.location.href="registry.php"'>
	
		</div>
	
		
	</div>
	
	<br/>
	<br/>
	
	</div>
	

	
	</body>
</html>