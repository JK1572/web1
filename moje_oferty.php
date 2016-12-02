/* oferty użytkownika
* do zmiany: tabele uslugi i oferty (zmiana adresu na wspolrzedne geograficzne)
* 
*/


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
						<?
						session_start();
	
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
		
		
	<?php
	
	$iduser = $_SESSION['id'];
	
	require_once "connect.php";
	
	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	
		
		if($rezultat = @$polaczenie->query("SELECT * FROM uslugi WHERE iduser = '$iduser'"))
		{
			$liczbaogloszen = $rezultat->num_rows;
			
			while ($wiersz = mysqli_fetch_array($rezultat))
			{
				echo<<<END
				<div class = "panelOgloszenie">
					<div class = "zdjecie"><img class="resize" src= "$wiersz[1]_PHOTO/$wiersz[0]_ID/$wiersz[0].jpg" alt="Zdjecie" ></div>
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
		
		
		if($rezultat = @$polaczenie->query("SELECT * FROM oferty WHERE iduser = '$iduser'"))
		{
			$liczbaogloszen2 = $rezultat->num_rows;
			
			while ($wiersz = mysqli_fetch_array($rezultat))
			{
				echo<<<END
				<div class = "panelOgloszenie">
					<div class = "zdjecie"><img class="resize" src= "$wiersz[1]_PHOTO/$wiersz[0]_ID_OFERTY/$wiersz[0].jpg" alt="Zdjecie" ></div>
					<div class = "zdjecieobok">
						<div class = "miasto">$wiersz[3]</div>
						<div class = "kg">cena: $wiersz[7]    </div>
						<div class = "zasieg">marka: $wiersz[5]    </div>
						<div class = "telefon">telefon: $wiersz[2]    </div>
					</div>
					
					
					
					
					
					
					
					
					
				</div>
		
END;
				
				
				
				$liczbaogloszen2 = $liczbaogloszen2 - 1;
			}
	
		
		}




	?>
		
		<br/>
		<br/>
		<br/>
		
		
	</div>
	
	


	</body>
</html>