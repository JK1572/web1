/* 
*baza danych uslugi - prawdopodobnie zmiana lokalizacji na wspolrzedne geograficzne
*
*
*
*/

<?php

session_start();



$target_dir =  $_SESSION['id']."_PHOTO"."/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$upload_OK = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	

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
		
	
	


		
		
		


if(isset($_POST["submit"]))
{
	$check = getimagesize($_FILES["photo"]["tmp_name"]);
		if($check !== false)
				{
					echo "File is an image -" . $check["mime"] . ".";
					$upload_OK = 1;
				}
		else
				{
					echo "File is not image.";
					$upload_OK = 0;
				}
			
}

if(file_exists($target_file))
				{
						echo "Plik już istnieje";
						$upload_OK = 0;
				}

//Sprawdz rozmiar
if($_FILES["photo"]["size"] > 500000)
				{
					echo "Przepraszamy, plik jest za duży";
					$upload_OK = 0;
				}
//Typ pliku
if($imageFileType != "jpg" && $imageFileType =! "png" && $imageFileType !="jpeg"
&& $imageFileType != "gif")
{
	echo "Przepraszamy, tylko pliki JPG, JPEG, PNG, GIF są dopuszczalne";
	$upload_OK = 0;
	
}			

if($upload_OK == 0 )
{
	echo "Przepraszamy,nie udało się załadowac pliku";
}	
else
{
	if(move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file))
	{
		echo "The file". basename($_FILES["photo"] ["name"]). "został załadowany";
		header('Location: welcomedod.php ');
	}
	else
	{
		echo "nie udało się-dupa";
	}
}




?>