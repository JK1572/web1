<?php

	session_start();
	
	if ((!isset($_POST['email'])) || (!isset($_POST['haslo'])))
		{
			header('Location: logowanie.php');
			exit();
		}


	require_once "connect.php";

	$polaczenie = @new mysqli($host,$db_user,$db_password,$db_name);
	
	if($polaczenie->connect_errno!=0)
		{
			echo "Error: ".$polaczenie->connect_errno . "Opis";
		
		}
	else
	{
		$login = $_POST['email'];
		$haslo = $_POST['haslo'];
		
		$login= htmlentities($login,ENT_QUOTES, "UTF-8"); 		//Zamienia znaki na encje
		
		
		
		
			if($rezultat = @$polaczenie->query(sprintf("SELECT * FROM users WHERE email = '%s'",
				mysqli_real_escape_string($polaczenie,$login))))
		{
			$ilu_userow = $rezultat->num_rows;
				if($ilu_userow>0)
				{
					$wiersz = $rezultat->fetch_assoc();
					if(password_verify($haslo,$wiersz['Haslo']))
						{
					
						
								$_SESSION['email'] = $wiersz['email'];
								$_SESSION['zalogowany'] = true;
								$_SESSION['id'] = $wiersz['ID'];
								
							
							
							//sprawdzanie czy istnieje juz folder usera
							$directoryName = $_SESSION['id']."_PHOTO";
							
							if(!is_dir($directoryName))
							{
								mkdir($directoryName, 0755);
							}
							
							
								unset($_SESSION['$blad']);
								$rezultat->free_result();
								
							
								header('Location: indexl.php'); 
								
								
						
						}
					
					else
						{
						
								$_SESSION['$blad'] = '<span>Nieprawidlowy login lub haslo!</span>';
								header('Location: logowanie.php');
							
						}	
				
				}
				
				else
				{
				
						$_SESSION['$blad'] = '<span>Nieprawidlowy login lub haslo!</span>';
						header('Location: logowanie.php');
					
				}		
			
		}
		
		
		$polaczenie->close();
		
	}

?>