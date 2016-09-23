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
		
		
		<div id = "formularz">
		
			<form action = "Wyswietl3.php" method = "Post" >
				<select type="text" class = "inputstyle2 inputborder"  placeholder="Wybierz usluge" name = "usluga"/>
					<option value = "oferta"  > Znajdz Ofertę </option>
					<option value = "zapytanie" > Znajdz Zapytanie </option>
				</select>
				<br /> <br />
					<input type = "text" class = "inputstyle2 inputborder" placeholder = "miasto" name = "miasto" /> 
					<input class = "inputstyle1 inputborder" type = "text" placeholder = "+km" name = "km" />
				<br /> <br />
					<input class = "inputstyle1 inputborder" type="text" placeholder="Waga od" name = "wagaod" /> 
					<input class = "inputstyle1 inputborder" type="text" placeholder="Waga do" name = "wagado"/>
				<br /> <br />
				
				<input type = "submit" name = "szukaj" value = "szukaj"  id = "szukajForm" onclick = "changesrc()"/>
			</form>
		<button onclick = "changesrc()">klik</button>
			
		
		</div> 
		
		<div id = "ramkaWyniki">
			<iframe src = "Wyswietl2.php" width = "98%" height = "1000px"  ></iframe>
		</div>
		
		
	</div>
	
	
</body>
</html>
