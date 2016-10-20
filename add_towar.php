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


	
<form id = "ogloszenie_add" method="post" action = "oferta_add.php" >


<br/>
<br/>
<br/>
<div id="nazwa_towar";>
<input type = "text" name = "Nazwa_towaru" class = "inputborder" placeholder="Nazwa towaru" />
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
<input type = "text" name = "Miejsce_startu" class = "inputborder" placeholder="Miasto startowe" />
<?php
		
				if(isset($_SESSION['e_start']))
					{
						
						echo   $_SESSION['e_start'];
						unset($_SESSION['e_start']);
					}
		
			?>					

</div>

<div id="cel" >
<input type = "text" name = "Miejsce_docelowe" class = "inputborder" placeholder="Miasto docelowe" />
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
<input type = "text" name = "Cena" class = "cena" placeholder="Podaj cene" />
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
<input type = "text" name = "Waga" class = "waga" placeholder="Podaj wagę towaru w kg" />
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

<form action="upload.php" method="post" enctype="multipart/form-data">
	Wybierz zdjęcia:
		<input type="file" name="photo" id="zdjecieup">
		<input type="file" name="photo" id="zdjecieup">
		<input type="file" name="photo" id="zdjecieup">
		<input type="file" name="photo" id="zdjecieup">
		<input type="file" name="photo" id="zdjecieup">
		<input type="submit" value="Upload Image" name="submit">
		
		
</form>
<div id="send_button">
<br/>
<br/>
<br/>
 <button class="button4" style="vertical-align:middle"><span>Dodaj ogłoszenie </span></button>
 
</div>
</div>	


</form>




</div>

</body>	
	</html>  