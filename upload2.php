<?php
session_start();
	
	if(!isset($_SESSION['zalogowany']))
		{
			header('Location: logowanie.php');
			exit();
		}	
		
		
		
$target_dir =  $_SESSION['id']."_PHOTO"."/";
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
	}
	else
	{
		echo "nie udało się-dupa";
	}
}
				
				
				
				
				
?>