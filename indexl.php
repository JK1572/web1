<?php
	session_start();
	
	if(!isset($_SESSION['zalogowany']))
					{
						header('Location: index.php');
						exit();
					}	

?>


<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Homepage</title>
	<link rel="stylesheet" href="style1.css" type="text/css" /> 
	


</head>


	



<body> 

	
	<div id = "page" >
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
						<a href="MojeKonto.php" class="dropbtn">Moje konto &#x2193 </a>
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
		
		
		<div id = "formularz">
		
			<form action = "Wyswietl3.php" method = "Post" >
			<div id="usl">
				<select type="text" class="inputstyle4 inputborder " placeholder="Wybierz usluge" name = "usluga"/>
					<option value = "oferta"  > Znajdz Ofertę </option>
					<option value = "zapytanie" > Znajdz Usługę </option>
				</select>
				</div>
				<br /> <br />
					<input type = "text" class = "inputstyle2 inputborder" placeholder = "miasto" name = "miasto" /> 
					<input class = "inputstyle1 inputborder" type = "text" placeholder = "+km" name = "km" />
				
					<input class = "inputstyle3 inputborder" type="text" placeholder="Waga od" name = "wagaod" /> 
					<input class = "inputstyle1 inputborder" type="text" placeholder="Waga do" name = "wagado"/>
				<br /> <br />
				
				<input type = "submit" name = "szukaj" value = "szukaj"  id = "szukajForm" onclick = "changesrc()"/>
			</form>
		
			
		<br/>
		<br/>
		
		</div>
		<br/>
		<br/>
		
		<div id = "losowe_ogloszenia">
		
		
		
<?php

		require_once "connect.php";
		
		$polaczenie2 = @new mysqli($host, $db_user, $db_password, $db_name);

	if ($polaczenie2->connect_errno!=0)
	{
		echo "Error: ".$polaczenie2->connect_errno;
	}
	else{
	
		if($rezultat2 = @$polaczenie2->query("SELECT idogloszenia from uslugi ORDER BY idogloszenia DESC LIMIT 1"))
		{
			
			$max = mysqli_fetch_array($rezultat2);
			$max2 = $max['idogloszenia'];
			
			
			}
		else{
			
			echo "Błąd połączenia";
		}
			
			$polaczenie2->close();
			
	}
	


			
?>
<br/>
<?php

	
	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	
		if($rezultat = @$polaczenie->query("SELECT * FROM uslugi WHERE idogloszenia <= '$max2'"))
		{
			$liczbaogloszen = $rezultat->num_rows;
			//$wiersz = $rezultat->fetch_assoc();
			 
			
			while ($wiersz = mysqli_fetch_array($rezultat))
			{
				echo<<<END
				<div class = "panelOgloszenie">
					<div class = "zdjecie"><img class="resize" src= "$wiersz[1]_PHOTO/$wiersz[0]_ID/$wiersz[0].jpg" alt="Zdjecie" ></div>
					<div class = "zdjecieobok">
						<div class = "miasto">miasto: $wiersz[5]</div>
						<div class = "kg">cena: $wiersz[0]    </div>
						<div class = "zasieg">marka: $wiersz[3]    </div>
						<div class = "telefon">telefon: $wiersz[4]    </div>
					</div>
					
					
					
					
					
					
					
					
					
				</div>
		
END;
				
				
				
				$liczbaogloszen = $liczbaogloszen - 1;
			}
			
			
			
		}
		
	$polaczenie->close();

?>
		
		
	



		</div>
		
		
	</div>
	
	
</body>
</html>
