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
<script>
$('.myForms').submit(function () {
    alert($(this).attr("id"));
    return true;
})


</script>
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


	
<form id = "ogloszeniep_add" method="post" action = "ogloszenie_add.php" class="myForms" >

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
<div id="marka_model";>
<input type = "text" name = "Marka_model" class = "inputborder" placeholder="Podaj markę i model pojazdu" />
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
<input type = "number" name = "c_ceny" class = "c_cena" placeholder="Podaj cene" />
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
<input type = "text" name= "Zasieg_m" class = "inputborder" placeholder="Podaj miasto">
<?php
		
				if(isset($_SESSION['e_zasiegm']))
					{
						
						echo   $_SESSION['e_zasiegm'];
						unset($_SESSION['e_zasiegm']);
					}
		
			?>
</div>
<div id="zasieg_km" >
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

<div id="send_photos">
<br/>

<form action="upload.php" method="post" enctype="multipart/form-data" >
	Wybierz zdjęcia:
		<input type="file" name="photo" id="zdjecieup">
			<input type="submit" value="Upload Image" name="submit">
		
		
</form>
<div id="send_button">
<br/>
<br/>
<br/>
 <button class="button4" style="vertical-align:middle"  id="clickMe"><span>Dodaj ogłoszenie </span></button>
 
</div>

</form>



</div>

</body>	
	</html>  