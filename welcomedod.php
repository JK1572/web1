<?php

	session_start();
	
	if(!isset($_SESSION['udanedodawanie']))
		{
			header('Location: logowanie.php');
			exit();
		}	
	else
	{
		unset($_SESSION['udanedodawanie']);
	}
	
?>
<!DOCTYPE HTML>

<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
</head>


<body>
	
	Dodawanie ogloszenia powiodło się <br/> <br/>
	
	<a href="indexl.php">Przejdź na stronę główną</a>


</body>
</html>