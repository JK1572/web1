<?php
	session_start();

?>


<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Homepage</title>
	<link rel="stylesheet" href="style1.css" type="text/css" /> 
	

</head>


	


<script>
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>

<script>


	
	function changesrc()
	{
		
		document.getElementById("ramkaWyniki2").src = "Wyswietl1.php";
		
	}
	
</script>
<body> 

	
	<div id = "page">
		<div id = "gornyPanel">
		
			<div id = "logo">
				<a href = "Homepage.php">
					<img src="logo.jpg"  width = "100%" height = "100%"/>
				</a>
			</div>
			
			<div id = "banner">
				<div id = "gornyBanner">afafbsa</div>
				
				
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
						<?
						
	
			if(!isset($_SESSION['zalogowany']))
					{
						header('Location: logowanie.php');
						exit();
					}	
					else
					{
						header('Location: add.php');
					}
					?>
					</li>
				</ul>
				
				
			</div>
		</div>
		
		<div id="ustawienia1">
		
		
		<form action="change.php" method="post" >
		<h1>Zmiana hasła:</h1>
		<input type = "password" name ="change_pass" class = "inputborder" placeholder="Podaj nowe hasło" />
		<?php
		
				if(isset($_SESSION['er_change']))
					{
						echo   $_SESSION['er_change'];
						unset($_SESSION['er_change']);
					}
		
			?>
			<br/>
			<?php
		
				if(isset($_SESSION['er_changepass']))
					{
						echo   $_SESSION['er_changepass'];
						unset($_SESSION['er_changepass']);
					}
		
			?>
		<input type = "password" name ="change_pass2" class = "inputborder" placeholder="Podaj ponownie nowe hasło" />
		<br/>
		<input type="submit" class="button" value="Zmień Hasło" />
		</form>
		
		</div>
		
		
		
	
	<div id="ustawienia2">
		
		<form action="change2.php" method="post" >
		<h1>Zmiana adresu zamieszkania:<h1>
		<input type = "text2" name ="change_adress" class = "inputborder" placeholder="Podaj nowy adres" />
		<br/>
		<input type="submit" class="button" value="Zmień Adres" />
		</form>
		</div>
		
		
		
	</div>
	
	</div>
</body>
</html>
