<?php
session_start();
	
	$user= $_SESSION['id'];
	
		require_once "connect.php";
		mysqli_report(MYSQLI_REPORT_STRICT);
	
		
			$polaczenie = new mysqli($host,$db_user,$db_password,$db_name);
			
			if($polaczenie->connect_errno!=0)
				{
					echo "Błąd połączenia";
				
				}
		else
				{
					
					$rezultat=$polaczenie->query("SELECT * FROM daneusers WHERE  iduser = '$user'");
				
					$ile_takich_userow = $rezultat->num_rows;
					if($ile_takich_userow>0)
					{
						
						header('Location: add_pojazd.php');
					} 
					else 
					{
						header('Location: formularz_osobowy.php');
					}
				}
				$polaczenie->close();
		
		
	

?>
