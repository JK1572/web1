<?php

	session_start();
	
	if(!isset($_SESSION['zalogowany']))
		{
			header('Location: logowanie.php');
			exit();
		}	
	
	
?>
<!DOCTYPE HTML>

<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
</head>


<body>
	
	Dodaj se zdjecie! <a href="add.php">Dodaj zdjecie!</a>;
	<?php
		echo "<p>Witaj ". $_SESSION['email'].'[ <a href="logout.php">Wyloguj sie!</a>]</p>';
		
	?>


</body>
</html>