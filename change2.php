<?php

session_start();

	$user = $_SESSION['id'];
	$newadress = $_POST['change_adress'];
	
	
					
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
					$rezultat=$polaczenie->query("UPDATE daneusers SET adres = '$newadress' WHERE iduser='$user'");
					
					header('Location: MojeKonto.php ');
					
					if(!$rezultat) throw new Exception($polaczenie->error);
					
					
						
					}
					
					
					$polaczenie->close();
			}
		
		catch(Exception $e)
			{
				
				echo "Błąd serwera,przepraszamy za niedogodności".$e;
			}
					
					
					
			
		
?>