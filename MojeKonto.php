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
							<a href="moje_oferty.php">Moje Oferty</a>
							<a href="moj_profil.php">Mój Profil</a>
							<a href="ustawienia.php">Ustawienia</a>
							<a href="logout.php">Wyloguj</a>
							
						</div>
					</li>
					
					<li class = "addbtn">
						<a href="#dodajoferte"> Dodaj ofertę</a>
					</li>
				</ul>
				
				
			</div>
		</div>
		
		
		<div style= "margin-top: 78px" id = 'panelOpcje'>
			<button name = "mojeOferty" value = "Moje Oferty"  class = "mojeKonto" id = "mojeKonto1" onclick='window.location.href="moje_oferty.php"'>Moje Oferty </button>
			<button name = "mojProfil" value = "Moje Oferty"  class = "mojeKonto" id = "mojeKonto2" onclick='window.location.href="moj_profil.php"'>Mój Profil </button>
			<button name = "ustawienia" value = "Moje Oferty"  class = "mojeKonto" id = "mojeKonto3" onclick='window.location.href="ustawienia.php"'>Ustawienia </button>
			<button name = "wyloguj" value = "Moje Oferty"  class = "mojeKonto" id = "mojeKonto4" onclick='window.location.href="logout.php"'>Wyloguj </button>
		</div>
		
		
		
	</div>
	
	
</body>
</html>
