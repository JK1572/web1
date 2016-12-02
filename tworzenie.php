/*
* (Chyba tworzenie konta) 
* Zmiany do bazy danych wprowadzone
* Do sprawdzenia
*/



<?php
	session_start();
	
	
	
		
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
					
					$rezultat=$polaczenie->query("SELECT ID FROM users_general WHERE email = '$email'");
					
					if(!$rezultat) throw new Exception($polaczenie->error);
					
					$ile_takich_maili = $rezultat->num_rows;
					if($ile_takich_maili>0)
					{
						$wszytsko_OK=false;
				
						$_SESSION['error_email']="Podany email juz istnieje";
				
						
					}
						
				if($wszystko_OK==true)
					{
						if($polaczenie->query("INSERT INTO users_general(email,haslo,rodzaj) VALUES('$email','$haslo_hash','$rkonta')"))
						{
							$_SESSION['udanarejestracja']=true;
							header('Location: welcome.php ');
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
				
				echo "B³¹d serwera,przepraszamy za niedogodnoœci".$e;
			}
		
	}
	
	
	
?>

