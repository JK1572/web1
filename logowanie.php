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
	<link rel="stylesheet" href="style1.css" type="text/css" /> 
	


</head>


	



<body> 

<div id="page">
	
	
	<div id = "gornyPanel">
		
			<div id = "logo">
				<a href = "index.php">
					<img src="logo.jpg"  width = "100%" height = "100%"/>
				</a>
			</div>
			
			<div id = "banner">
				<div id = "gornyBanner"><img src="reklama.jpg"  width = "100%" height = "100%"/> 
				</div>
				
				<div id="dolnyBanner">
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
		</div>
		<div id="clear"></div>	
	
	<div id= "logowanie">

	
	<form action="loging.php" method="post">
	
		<input type = "number_1" name ="email" class = "inputborder" placeholder="Login" />
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
		
	</form>
		
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