<?php
	session_start();

?>

<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Wyszukiwanie3</title>
	<link rel="stylesheet" href="style3.css" type="text/css" />
	

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
		
		<?php

	
	require_once "connect.php";
	
	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{	
		$usluga = $_POST['usluga'];
		$miasto = $_POST['miasto'];
		$km = $_POST['km'];
		$wagaod = $_POST['wagaod'];
		$wagado = $_POST['wagado'];
		
		if($rezultat = @$polaczenie->query("SELECT * FROM uslugi WHERE miasto = '$miasto'"))
		{
			$liczbaogloszen = $rezultat->num_rows;
			
			while ($wiersz = mysqli_fetch_array($rezultat))
			{
				echo<<<END
				<div class = "panelOgloszenie">
					<div class = "zdjecie">Zdjecie</div>
					<div class = "zdjecieobok">
						<div class = "miasto">$wiersz[6]</div>
						<div class = "kg">cena: $wiersz[5]    </div>
						<div class = "zasieg">marka: $wiersz[3]    </div>
						<div class = "telefon">telefon: $wiersz[2]    </div>
					</div>
					
					
					
					
					
					
					
					
					
				</div>
		
END;
				
				
				
				$liczbaogloszen = $liczbaogloszen - 1;
			}
			
			
			
		}
		
	}

?>
	</div>




</body>
</html>