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
	<title>Homepage</title>
	<link rel="stylesheet" href="style1.css" type="text/css" /> 
	

</head>


	





<body> 

	
<div id = "page">
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
						<a href="MojeKonto.php" class="dropbtn">Moje Konto >></a>
						<div class="dropdown-content">
							<a href="moje_oferty.php">Moje Oferty</a>
							<a href="moj_profil.php">Mój Profil</a>
							<a href="ustawienia.php">Ustawienia</a>
							<a href="logout.php">Wyloguj</a>
						</div>
					</li>
					
					<li class = "addbtn">
						<a href="add.php"> Dodaj ofertę</a>
					
					</li>
				</ul>
				
				
			</div>
		</div>
		
	
	
	

	

	
<form id = "ogloszenie_add" method="post" action = "oferta_add.php" enctype="multipart/form-data" >


<br/>
<br/>
<br/>
<div id="nazwa_towar";>
<input type = "number_1" name = "Nazwa_towaru" class = "inputborder_1" placeholder="Nazwa towaru" />
<br/>
<?php
		
				if(isset($_SESSION['e_nazwa']))
					{
						
						echo   $_SESSION['e_nazwa'];
						unset($_SESSION['e_nazwa']);
					}
		
			?>
			
			<?php
		
				if(isset($_SESSION['e_ogloszenie']))
					{
						
						echo   $_SESSION['e_ogloszenie'];
						unset($_SESSION['e_ogloszenie']);
					}
		
			?>
</div>
<br/>
<br/>
<br/>
<div id="start" >
<input type = "number_1" name = "Miejsce_startu" class = "inputborder_1" placeholder="Miasto startowe" />
<?php
		
				if(isset($_SESSION['e_start']))
					{
						
						echo   $_SESSION['e_start'];
						unset($_SESSION['e_start']);
					}
		
			?>					

</div>

<div id="cel" >
<input type = "number_1" name = "Miejsce_docelowe" class = "inputborder_1" placeholder="Miasto docelowe" />
<?php
		
				if(isset($_SESSION['e_cel']))
					{
						
						echo   $_SESSION['e_cel'];
						unset($_SESSION['e_cel']);
					}
		
		?>	
		<br/>
		<br/>
		<br/>
		<br/>
</div>


<div id="cena">
<input type = "number_1" name = "Cena" class = "cena" placeholder="Podaj cene" />
<?php
		
				if(isset($_SESSION['e_cena']))
					{
						
						echo   $_SESSION['e_cena'];
						unset($_SESSION['e_cena']);
					}
		
		?>	
<br/>
<br/>
<br/>
<br/>
</div>

<div id="waga">
<input type = "number_1" name = "Waga" class = "waga" placeholder="Podaj wagę towaru w kg" />
<?php
		
				if(isset($_SESSION['e_waga']))
					{
						
						echo   $_SESSION['e_waga'];
						unset($_SESSION['e_waga']);
					}
		
		?>	
<br/>
<br/>
<br/>
<br/>
</div>

<div id="op_2" >
<textarea name="Opis" placeholder="Opis (maksymalnie 100 znaków)"></textarea>
<?php
		
				if(isset($_SESSION['e_opis']))
					{
						
						echo   $_SESSION['e_opis'];
						unset($_SESSION['e_opis']);
					}
		
		?>
</div>


	



<div id="send_photos">
<br/>
<br/>

	Wybierz zdjęcia:
		<input type="file" name="photo" id="zdjecieup">
		
		
		
		

<div id="send_button">
<br/>
<br/>
<br/>

 <input type="submit" class="addbtn" value="Dodaj Oferte" name="submit">
 
</div>
</div>	


</form>




</div>

</body>	
	</html>  