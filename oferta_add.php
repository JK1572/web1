<?php

session_start();



	if(isset($_POST['Nazwa_towaru']))
	{
		$wszystko_OK = true;
		
		
		$nazwa_tow = $_POST['Nazwa_towaru'];
		$lokalizacja_towaru = $_POST['Miejsce_startu'];
		$cel_towaru = $_POST['Miejsce_docelowe'];
		$cena_towaru = $_POST['Cena'];
		$waga_towaru = $_POST['Waga'];
		$opis_towaru = $_POST['Opis'];
		$user_id = $_SESSION['id'];
		
	}

	if(empty($_POST['Nazwa_towaru']))
	{
		$wszystko_OK = false;
		$_SESSION['e_nazwa']= "Podaj nazwe towaru!";
		header('Location:add_towar.php');
	}

	if(empty($_POST['Miejsce_startu']))
	{
		$wszystko_OK = false;
		$_SESSION['e_start']= "Podaj miasto w którym znajduje się towar";
		header('Location:add_towar.php');
	}

	if(empty($_POST['Miejsce_docelowe']))
	{
		$wszystko_OK = false;
		$_SESSION['e_cel']= "Podaj miasto docelowe towaru";
		header('Location:add_towar.php');
	}

	if(empty($_POST['Cena']))
	{
		$wszystko_OK = false;
		$_SESSION['e_cena']= "Podaj cene zlecenia przewozu towaru";
		header('Location:add_towar.php');
	}
	
	if(empty($_POST['Waga']))
	{
		$wszystko_OK = false;
		$_SESSION['e_waga']= "Podaj wagę towaru w kg!";
		header('Location:add_towar.php');
	}
	
	if(empty($_POST['Opis']))
	{
		$wszystko_OK = false;
		$_SESSION['e_opis']= "Podaj krótki opis towaru!";
		header('Location:add_towar.php');
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
					//mysql_query("SET CHARSET utf8");
					//mysql_query("SET NAMES 'utf8' COLLATE 'utf8_polish_ci'"); 
					
					$rezultat=$polaczenie->query("SELECT * FROM oferty WHERE  iduser = '$user_id' AND nazwatowaru = '$nazwa_tow'");
					
					if(!$rezultat) throw new Exception($polaczenie->error);
					
					$ile_takich_ogloszen = $rezultat->num_rows;
					if($ile_takich_ogloszen>0)
					{
						$wszystko_OK=false;
						
				
						$_SESSION['e_ogloszenie']="Takie ogloszenie juz istnieje";
						header('Location: add_towar.php');
					}
						
				if($wszystko_OK==true)
					{
						if($polaczenie->query("INSERT INTO oferty(iduser,nazwatowaru,miejscestartu,miejscedocelowe,cena,waga,opis)
							VALUES('$user_id','$nazwa_tow','$lokalizacja_towaru','$cel_towaru','$cena_towaru','$waga_towaru','$opis_towaru')"))
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
		
	
	
	try
		{
			$polaczenie = new mysqli($host,$db_user,$db_password,$db_name);
			
			if($polaczenie->connect_errno!=0)
				{
					throw new Exception(mysqli_connect_errno());
				
				}
		else
				{
					
					$rezultat=$polaczenie->query("SELECT * FROM oferty WHERE  iduser = '$user_id' AND nazwatowaru = '$nazwa_tow' AND opis = '$opis_towaru' ");
					
					if(!$rezultat) throw new Exception($polaczenie->error);
					
					
						
				if($wszystko_OK==true)
					{
						$wiersz = $rezultat->fetch_assoc();
						
						$_SESSION['idofer'] = $wiersz['idogloszen'];
					}
					
					$rezultat->free_result();
					$polaczenie->close();
			}
		}
		catch(Exception $e)
			{
				
				echo "Błąd serwera,przepraszamy za niedogodności".$e;
			}
		
	

	
$directoryName = $_SESSION['id']."_PHOTO"."/".$_SESSION['idofer']."_ID_OFERTY"."/";		
mkdir($directoryName, 0755);
		
$target_dir =  $_SESSION['id']."_PHOTO"."/".$_SESSION['idofer']."_ID_OFERTY"."/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$upload_OK = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

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
						header('Location: add_pojazd');
				
				}
//Sprawdz rozmiar
if($_FILES["photo"]["size"] > 5000000)
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
	header('Location: add_towar');
				
	
}			

if($upload_OK == 0 )
{
	echo "Przepraszamy,nie udało się załadowac pliku";
	header('Location: add_towar');
				
}	
else
{
	$temp = explode(".",$_FILES["photo"]["name"]);
	$newfilename = $_SESSION['idofer'].".jpg";
	
	
				if(move_uploaded_file($_FILES["photo"]["tmp_name"],$_SESSION['id']."_PHOTO"."/".$_SESSION['idofer']."_ID_OFERTY"."/".$newfilename	))
				{
					
					//echo "The file". basename($_FILES["photo"] ["name"]). "został załadowany";
					if($wszystko_OK==true)
					{
						header('Location: welcomedod.php '); 
					}
					else
					{
						header('Location: add_towar.php '); 
					}
				}
				else
				{
					echo "nie udało się-dupa";
				}
	
	
}

unset($_SESSION['idofer']);
?>
	






?>