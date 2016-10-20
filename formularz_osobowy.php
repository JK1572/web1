   <?php
session_start();
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


<div id="formularz" >

<form action="form_save.php" method="post" >

<input type = "text2" name ="imie" class = "inputborder" placeholder="Podaj Imię" />
<br/>
<div id="a" style="div">
<?php
		
				if(isset($_SESSION['error_imie']))
					{
						
						echo   $_SESSION['error_imie'];
						unset($_SESSION['error_imie']);
					}
		
			?>
</div>
<br/>
<input type = "text2" name ="nazwisko" class = "inputborder" placeholder="Podaj Nazwisko" />
<br/>
<div id="a" style="div">
<?php
		
				if(isset($_SESSION['error_nazwisko']))
					{
						
						echo   $_SESSION['error_nazwisko'];
						unset($_SESSION['error_nazwisko']);
					}
		
			?>
</div>
<br/>
<input type = "text2" name ="adres" class = "inputborder" placeholder="Podaj Adres" />
<br/>
<div id="a" style="div">
<?php
		
				if(isset($_SESSION['error_adres']))
					{
						
						echo   $_SESSION['error_adres'];
						unset($_SESSION['error_adres']);
					}
		
			?>
</div>
<br/>
<input type = "text2" name ="wojewodztwo" class = "inputborder" placeholder="Podaj województwo" />
<br/>
<div id="a" style="div">
<?php
		
				if(isset($_SESSION['error_woj']))
					{
						
						echo   $_SESSION['error_woj'];
						unset($_SESSION['error_woj']);
					}
		
			?>
</div>
<br/>
<input type = "text2" name ="nr-telefonu" class = "inputborder" placeholder="Podaj nr.telefonu" />
<br/>
<div id="a" style="div">
<?php
		
				if(isset($_SESSION['error_telefon']))
					{
						
						echo   $_SESSION['error_telefon'];
						unset($_SESSION['error_telefon']);
					}
		
			?>
</div>
<br/>
<br/>
<div id="send_formularz">
<button class="button5" style="vertical-align:middle"> <span>Wyślij formularz</span> </button>

</div>


</form>






</div>

	
	
	
	
	

	
</div>

</body>	
	</html>  