<?php

session_start();

	

	if(isset($_POST['Marka_model']))
	{
		$wszystko_OK = true;
		
		
		$marka_model = $_POST['Marka_model'];
		$rodzaj_ceny = $_POST['r_ceny'];
		$cena = $_POST['c_ceny'];
		$miasto = $_POST['Zasieg_m'];
		$zasieg = $_POST['Zasieg_km'];
		$opis_towaru = $_POST['opis'];
		$userid = $_SESSION['id'];
		
	}

	if(empty($_POST['Marka_model']))
	{
		$wszystko_OK = false;
		$_SESSION['e_marka_model']= "Podaj markę i model!";
		header('Location:add_pojazd.php');
	}

	if(empty($_POST['r_ceny']))
	{
		$wszystko_OK = false;
		$_SESSION['e_rceny']= "Wybierz sposób płatności";
		header('Location:add_pojazd.php');
	}

	if(empty($_POST['c_ceny']))
	{
		$wszystko_OK = false;
		$_SESSION['e_ccena']= "Podaj cenę!";
		header('Location:add_pojazd.php');
	}

	if(empty($_POST['Zasieg_m']))
	{
		$wszystko_OK = false;
		$_SESSION['e_zasiegm']= "Podaj miasto które chcesz obsługiwać";
		header('Location:add_pojazd.php');
	}
	
	if(empty($_POST['Zasieg_km']))
	{
		$wszystko_OK = false;
		$_SESSION['e_zasiegkm']= "Podaj zasięg w którym chcesz wykonywać usługi!";
		header('Location:add_pojazd.php');
	}
	
	if(empty($_POST['opis']))
	{
		$wszystko_OK = false;
		$_SESSION['e_opisbus']= "Podaj krótki opis towaru!";
		header('Location:add_pojazd.php');
	}
	
	
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
					
					$rezultat=$polaczenie->query("SELECT * FROM uslugi WHERE  iduser = '$userid' AND miasto = '$miasto' ");
					
					if(!$rezultat) throw new Exception($polaczenie->error);
					
					$ile_takich_uslug = $rezultat->num_rows;
					if($ile_takich_uslug>0)
					{
						$wszystko_OK=false;
				
						$_SESSION['e_usluga']="Takie ogloszenie juz istnieje";
						header('Location: add_pojazd.php');
					} 
						
				if($wszystko_OK==true)
					{
						if($polaczenie->query("INSERT INTO uslugi(iduser,markamodel,rodzceny,cena,miasto,zasieg,opis)
							VALUES('$userid','$marka_model','$rodzaj_ceny','$cena','$miasto','$zasieg','$opis_towaru')"))
						{
							$_SESSION['udanedodawanie']=true;
							header('Location: welcomedod.php ');
						}
						else
						{
							throw new Exception($polaczenie->error);
						}
					}
					
					
					$polaczenie->close();
			}
		}
		catch(Exception $e)
			{
				
				echo "Błąd serwera,przepraszamy za niedogodności".$e;
			}
		
	
	






?>