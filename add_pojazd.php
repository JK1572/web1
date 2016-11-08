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
		
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

<div id="ogl">
<form id = "firstform" method="post" action= "ogloszenie_add.php" enctype="multipart/form-data"  >

<br/>
<br/>
<br/>
<?php
		
				if(isset($_SESSION['e_usluga']))
					{
						
						echo   $_SESSION['e_usluga'];
						unset($_SESSION['e_usluga']);
					}
		
			?>
<br/>
<br/>
<div id="marka_model">
<input type = "number_1" name = "Marka_model" class = "inputborder_1" placeholder="Podaj markę i model pojazdu" />
<?php
		
				if(isset($_SESSION['e_marka_model']))
					{
						
						echo   $_SESSION['e_marka_model'];
						unset($_SESSION['e_marka_model']);
					}
		
			?>
</div>
<br/>
<br/>
<br/>
<div id="r_cena" >
<select type="text" class = "r_cena"   name = "r_ceny">
					<option value = "fracht"  > Cena za fracht </option>
					<option value = "kilometr"  > Cena za kilometr </option>
					
</select> 
<?php
		
				if(isset($_SESSION['e_rceny']))
					{
						
						echo   $_SESSION['e_rceny'];
						unset($_SESSION['e_rceny']);
					}
		
			?>
</div>
<div id="c_cena">
<input type = "number_1" name = "c_ceny" class = "c_cena" placeholder="Podaj cene" />
<?php
		
				if(isset($_SESSION['e_ccena']))
					{
						
						echo   $_SESSION['e_ccena'];
						unset($_SESSION['e_ccena']);
					}
		
?>
<br/>
<br/>
<br/>
</div>

<div id="zasieg_m" >
<input type = "number_1" name= "Zasieg_m" class = "inputborder_1" placeholder="Podaj miasto">
<?php
		
				if(isset($_SESSION['e_zasiegm']))
					{
						
						echo   $_SESSION['e_zasiegm'];
						unset($_SESSION['e_zasiegm']);
					}
		
			?>
</div>
<div id="zasieg_km" >
<select type="text_1" class = "zasieg_km"   name = "Zasieg_km">
					<option value="" disabled select>+km</option>
					<option value = "+5"  > +5 km </option>
					<option value = "+10" >  +10 km </option>
					<option value = "+15" >  +15 km </option>
					<option value = "+20" >  +20 km </option>
					<option value = "+25" >  +25 km </option>
					<option value = "+30" >  +30 km </option>
					<option value = "+40" >  +40 km </option>
					<option value = "+50" >  +50 km </option>
					<option value = "+75" >  +75 km </option>
					<option value = "+100" >  +100 km </option>
</select> 
<?php
		
				if(isset($_SESSION['e_zasiegkm']))
					{
						
						echo   $_SESSION['e_zasiegkm'];
						unset($_SESSION['e_zasiegkm']);
					}
		
?>
<br/>
<br/>
<br/>
</div>
<br/>
<br/>
<br/>
<div id="op" >
<textarea name="opis" placeholder="Opis (maksymalnie 100 znaków)"></textarea>
<?php
		
				if(isset($_SESSION['e_opisbus']))
					{
						
						echo   $_SESSION['e_opisbus'];
						unset($_SESSION['e_opisbus']);
					}
		
			?>
</div>
<br/>
<br/> 
<br/>


<br/>






<div id="send_photos">

	Wybierz zdjęcia:
		<input type="file" name="photo" id="zdjecieup">
			
		
</div>

<div id="send_button">
<br/>
<br/>
<br/>
 <input type="submit" value="Dodaj ogloszenie" name="submit">
 
</div>
</form>



</div>
</div>



</body>	
	</html>  