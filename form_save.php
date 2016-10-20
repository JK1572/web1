 <?php

	session_start();

	if((!isset($_SESSION['zalogowany'])))
		{	
			header('Location: logowanie.php');
			exit();
		}

		
		
		
		
		
		if(isset($_POST['imie']))
	{
		$wszystko_OK=true;
		
		$user = $_SESSION['id'];
		$imie = $_POST['imie'];
		$nazwisko = $_POST['nazwisko'];
		$adres = $_POST['adres'];
		$woj= $_POST['wojewodztwo'];
		$telefon= $_POST['nr-telefonu'];
	}
			if(empty($_POST["imie"]))
		{
			$wszystko_OK=false;
			$_SESSION['error_imie']="Podaj imie";
			header('Location:formularz_osobowy.php');
			
		}
		
			if(empty($_POST["nazwisko"]))
		{
			$wszystko_OK=false;
			$_SESSION['error_nazwisko']="Podaj nazwisko";
			header('Location:formularz_osobowy.php');
			
		}
		
			if(empty($_POST["adres"]))
		{
			$wszystko_OK=false;
			$_SESSION['error_adres']="Podaj adres";
			header('Location:formularz_osobowy.php');
			
		}
			if(empty($_POST["wojewodztwo"]))
		{
			$wszystko_OK=false;
			$_SESSION['error_woj']="Podaj województwo";
			header('Location:formularz_osobowy.php');
			
		}
			if(empty($_POST["nr-telefonu"]))
		{
			$wszystko_OK=false;
			$_SESSION['error_telefon']="Podaj nr telefonu";
			header('Location:formularz_osobowy.php');
			
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
					
					$rezultat=$polaczenie->query("SELECT * FROM daneusers WHERE  iduser = '$user'");
					
					if(!$rezultat) throw new Exception($polaczenie->error);
					
					$ile_takich_ogloszen = $rezultat->num_rows;
					if($ile_takich_ogloszen>0) 
					{
						$wszystko_OK=false;
				
						$_SESSION['error_user']="Dane użytkownika zostały podane już wcześniej";
						header('Location: indexl.php');
					}
						
				if($wszystko_OK==true)
					{
						if($polaczenie->query("INSERT INTO daneusers(iduser,imie,nazwisko,adres,wojewodztwo,telefon) 
							VALUES('$user','$imie','$nazwisko','$adres','$woj','$telefon')"))
						{
							$_SESSION['udanedane']=true;
							header('Location: add.php ');
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