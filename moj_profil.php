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
		
	<div id="dane">
	
	<?php
	
	$user = $_SESSION['id'];
	require_once "connect.php";
		mysqli_report(MYSQLI_REPORT_STRICT);
	
		try
		{
			$polaczenie = new mysqli($host,$db_user,$db_password,$db_name);
			
			if($polaczenie->connect_errno!=0)
				{
					throw new Exception(mysqli_connect_errno());
				
				}
		else
				{
					
					$rezultat=$polaczenie->query("SELECT * FROM daneusers WHERE  iduser = '$user'");
					
					if(!$rezultat) throw new Exception($polaczenie->error);
					
					$ile_takich_ogloszen = $rezultat->num_rows;
					if($ile_takich_ogloszen>0) 
					{
						$wiersz = $rezultat->fetch_assoc();
						
						$_SESSION['imie'] = $wiersz['imie'];
						$_SESSION['nazwisko'] = $wiersz['nazwisko'];
						$_SESSION['adres'] = $wiersz['adres'];
						$_SESSION['wojewodztwo'] = $wiersz['wojewodztwo'];
						$_SESSION['telefon'] = $wiersz['telefon'];
					}	
						else
						{
							throw new Exception($polaczenie->error);
						}
					}
					
					
					$polaczenie->close();
			}
		
		catch(Exception $e)
			{
				
				echo "Błąd serwera,przepraszamy za niedogodności".$e;
			}
		
	
	?>
		
		<h2>Dane Osobowe:<h2>
		<br/>
		<br/>
		
		Imie: <?php echo  $_SESSION['imie']; ?>
		<br/>
		<br/>
		Nazwisko: <?php echo  $_SESSION['nazwisko']; ?>
		<br/>
		<br/>
		Adres: <?php echo  $_SESSION['adres']; ?>
		<br/>
		<br/>
		Telefon: <?php echo  $_SESSION['telefon']; ?>
		
			
	</div>
		
		<br/>
		<br/>
		<br/>
		
</div>
	
</body>
</html>
