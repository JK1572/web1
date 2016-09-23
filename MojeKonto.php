<?php
	session_start();
	
?>


<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>MojeKonto</title>
	<link rel="stylesheet" href="style2.css" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	
	
	<script>
	document.addEventListener("DOMContentLoaded", function(event) {
        $("#mojeKonto1").fadeIn(1000);
        $("#mojeKonto2").fadeIn(1100);
        $("#mojeKonto3").fadeIn(1200); 
		$("#mojeKonto4").fadeIn(1300);
		$("#mojeKonto5").fadeIn(1400);
		$("#mojeKonto6").fadeIn(1500);
		$("#mojeKonto7").fadeIn(1600);
		$("#mojeKonto8").fadeIn(1700);
	});
	</script>

	
</head>


	
<body> 


	<div id = "page">
		<div id = "gornyPanel">
		
			<div id = "logo">
				<a href = "Homepage.php">
					<img src="photo2.png"  width = "100%" height = "100%"/>
				</a>
			</div>
			
			<div id = "banner">
				<div id = "gornyBanner">afafbsa</div>
				
				
				<ul>
					<li class="dropdown">
						<a href="MojeKonto.php" class="dropbtn">Moje Konto >></a>
						<div class="dropdown-content">
							<a href="MojeOferty.php">Moje Oferty</a>
							<a href="Poczta.php">Skrzynka Pocztowa</a>
							<a href="AktywneZlecenia.php">Aktywne Zlecenia</a>
							<a href="HistoriaZlecen.php">Historia Zleceń</a>
							<a href="MojProfil.php">Mój Profil</a>
							<a href="Opinie.php">Opinie</a>
							<a href="Ustawienia.php">Ustawienia</a>
						</div>
					</li>
					
					<li class = "addbtn">
						<a href="#dodajoferte"> Dodaj ofertę</a>
					</li>
				</ul>
				
				
			</div>
		</div>
		
		
		<div style= "margin-top: 78px" id = 'panelOpcje'>
			<button name = "mojeOferty" value = "Moje Oferty"  class = "mojeKonto" id = "mojeKonto1">Moje Konto</button>
			<button name = "skrzynkaPocztowa" value = "Skrzynka Pocztowa"  class = "mojeKonto" id = "mojeKonto2">MSkrzynka Pocztowa</button>
			<button name = "aktywneZlecenia" value = "Aktywne Zlecenia"  class = "mojeKonto" id = "mojeKonto3">Aktywne Zlecenia</button>
			<button name = "historiaZlecen" value = "Historia Zleceń"  class = "mojeKonto" id = "mojeKonto4">Historia Zleceń</button>
			<button name = "mojProfil" value = "Mój Profil"  class = "mojeKonto" id = "mojeKonto5">Mój Profil</button>
			<button name = "opinie" value = "Opinie"  class = "mojeKonto" id = "mojeKonto6">Opinie</button>
			<button name = "ustawienia" value = "Ustawienia"  class = "mojeKonto" id = "mojeKonto7">Ustawienia</button>
			<button name = "dodajOferte" value = "Dodaj ofertę"  class = "mojeKonto" id = "mojeKonto8">Dodaj Ofertę</button>
		</div>
		
		
		
	</div>
	
	
</body>
</html>
