<?php

	session_start();
	
	if(!isset($_SESSION['udanarejestracja']))
		{
			header('Location: logowanie.php');
			exit();
		}	
	else
	{
		unset($_SESSION['udanarejestracja']);
	}
	
?>
<!DOCTYPE HTML>

<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
</head>


<body>
	
	Dziękujemy za rejestracje w  serwisie <br/> <br/>
	
	<a href="Rejestracja.php">Zaloguj się na swoje konto!</a>


</body>
</html>