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



<form id = "firstform" method="post" action= "ogloszenie_add2.php" enctype="multipart/form-data" >
<br/>
<?php
		
				if(isset($_SESSION['e_usluga']))
					{
						
						echo   $_SESSION['e_usluga'];
						unset($_SESSION['e_usluga']);
					}
		
			?>
<br/>
<input type = "text" name = "Marka_model" class = "inputborder" placeholder="Podaj markę i model pojazdu" />
<?php
		
				if(isset($_SESSION['e_marka_model']))
					{
						
						echo   $_SESSION['e_marka_model'];
						unset($_SESSION['e_marka_model']);
					}
		
			?>
<br/>
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
<input type = "number" name = "c_ceny" class = "c_cena" placeholder="Podaj cene" />
<?php
		
				if(isset($_SESSION['e_ccena']))
					{
						
						echo   $_SESSION['e_ccena'];
						unset($_SESSION['e_ccena']);
					}
		
?>
<br/>
<input type = "text" name= "Zasieg_m" class = "inputborder" placeholder="Podaj miasto">
<?php
		
				if(isset($_SESSION['e_zasiegm']))
					{
						
						echo   $_SESSION['e_zasiegm'];
						unset($_SESSION['e_zasiegm']);
					}
		
			?>
<select type="text" class = "zasieg_km"   name = "Zasieg_km">
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
<textarea name="opis" placeholder="Opis (maksymalnie 100 znaków)"></textarea>
<?php
		
				if(isset($_SESSION['e_opisbus']))
					{
						
						echo   $_SESSION['e_opisbus'];
						unset($_SESSION['e_opisbus']);
					}
		
			?>
 <br/>


	Wybierz zdjęcia:
		<input type="file" name="photo" id="zdjecieup">
			
<br/>
 <input type="submit" value="Dodaj ogloszenie" name="submit">
 

</form>



</div>
</div>



</body>	
	</html>  