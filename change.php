<?php

session_start();

	$user = $_SESSION['id'];
	$newpass = $_POST['change_pass'];
	$newpass2 = $_POST['change_pass2'];
	
	if($newpass !=$newpass2)
	{
		$_SESSION['er_change']="Hasła nie są takie same, spróbuj ponownie";
		header('Location: ustawienia.php ');
	}
	if((strlen($newpass)<3) || (strlen($newpass)>20))
			{
				$wszystko_OK=false;
				$_SESSION['er_changepass']="Hasło musi zawierać sie od 3 do 20 znaków";
				header('Location: ustawienia.php ');
			}
	 
	 $haslo_hash = password_hash($newpass,PASSWORD_DEFAULT);

	
					
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
					$rezultat=$polaczenie->query("UPDATE users SET Haslo = '$haslo_hash' WHERE ID='$user'");
					
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