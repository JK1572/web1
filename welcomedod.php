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
	<title>Homepage</title>
	<link rel="stylesheet" href="style1.css" type="text/css" /> 
	


</head>


<body>

<div id = "page" >
		<div id = "gornyPanel">
		
			<div id = "logo">
				<a href = "index.php">
					<img src="logo.jpg"  width = "100%" height = "100%"/>
				</a>
			</div>
			
			<div id = "banner">
				<div id = "gornyBanner"><img src="reklama.jpg"  width = "100%" height = "100%"/></div>
				
				
				<ul>
					<li class="dropdown">
					
						<a href="logowanie.php" class="dropbtn">Moje konto &#x2193 
						
						</a>
					</li>
					
					<li class = "addbtn">
						<a href="logowanie.php"> Dodaj ofertę</a>
						
					</li>
				</ul>
				
				
			</div>
		</div>
	
	Dodawanie ogloszenia powiodło się <br/> <br/>
	
	<a href="indexl.php">Przejdź na stronę główną</a>


</body>
</html>