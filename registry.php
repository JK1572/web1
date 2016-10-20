 <?php
	session_start();
	
	
	
	if(isset($_POST['Email']))
	{
		$wszystko_OK=true;
		
		
		$pass = $_POST['Haslo'];
		$pass2 = $_POST['Haslo_2'];
		$email = $_POST['Email'];
		$rkonta= $_POST['Rodzaj_konta'];
		
			if(empty($_POST["Rodzaj_konta"]))
		{
			$wszystko_OK=false;
			$_SESSION['error_rkonta']="Wybierz rodzaj konta";
			
			
		}
		
		
		$email_B = filter_var($email,FILTER_SANITIZE_EMAIL );
		
		
		if((filter_var($email_B,FILTER_VALIDATE_EMAIL)==false) || ($email_B!=$email))
		{
			$wszystko_OK=false;
			$_SESSION['error_email']="Podaj poprawny adres e-mail!";
			
		}
		
		if((strlen($pass)<3) || (strlen($pass)>20))
			{
				$wszystko_OK=false;
				$_SESSION['error_nick']="Haslo musi zawierac sie od 3 do 20 znakow";
			}
			
		if($pass!=$pass2)
		{
			$wszytsko_OK=false;
			$_SESSION['error_pass']="Hasla nie sa takie same";
			
		}		
		
		$haslo_hash = password_hash($pass,PASSWORD_DEFAULT);
		
		
		
		if(!isset($_POST['regulamin']))
		{
			$wszystko_OK=false;
			$_SESSION['error_check']="Potwierdz akceptacje regulaminu";
			
		}
		
		$sekret = "6LeCiSUTAAAAAOVo8sQJohzUb1FSi8xiczyk9pgD";
		
		$sprawdz = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$sekret.'&response='.$_POST[
		'g-recaptcha-response']);
		
		$odpowiedz = json_decode($sprawdz);
		
		if($odpowiedz->success==false)
		{
			$wszytsko_OK=false;
			
			$_SESSION['error_bot']="Potwierdz ze nie jestes botem";
			
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
					
					$rezultat=$polaczenie->query("SELECT ID FROM users WHERE email = '$email'");
					
					if(!$rezultat) throw new Exception($polaczenie->error);
					
					$ile_takich_maili = $rezultat->num_rows;
					if($ile_takich_maili>0)
					{
						$wszytsko_OK=false;
				
						$_SESSION['error_email']="Podany email juz istnieje";
				
						
					}
						
				if($wszystko_OK==true)
					{
						if($polaczenie->query("INSERT INTO users(email,Haslo,rodzajkonta) VALUES('$email','$haslo_hash','$rkonta')"))
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
				
				echo "Błąd serwera,przepraszamy za niedogodności".$e;
			}
		
	}
	
	
	
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Rozwiazywanie problemu</title>
	<link rel="stylesheet" href="style_rejestracja.css" type="text/css" />
	
	<script src='https://www.google.com/recaptcha/api.js'></script>
	
</head>
<body>

<div id ="page">
	<div id = "gornyPanel">
		<div id = "logo"><img src="logo.jpg" /></div>
		<div id = "banner">
			<div id = "gornyBanner">Baner</div>
			
			
			<div id = "dolnyBanner">
				<button class="button2" style="vertical-align:middle"><span>Moje konto </span></button>

			
			</div>
		</div>
	</div>

<div/>


	
<div id = "rejestracja" >
	
	<form method="post">
	
		<div id="zawartosc">
	
		<input type="text"  name="Rodzaj_konta" class="inputborder" placeholder="Rodzaj konta" />
		<br/>
		<?php
		
				if(isset($_SESSION['error_rkonta']))
					{
						echo   $_SESSION['error_rkonta'];
						unset($_SESSION['error_rkonta']);
					}
		
			?>
		<br/>
		<br/>
		<input type="text" name="Email" class="inputborder" placeholder="adres e-mail" />
		<br/>
				<?php
		
				if(isset($_SESSION['error_email']))
					{
						echo   $_SESSION['error_email'];
						unset($_SESSION['error_email']);
					}
		
			?>
		
		
		<br/>
		<br/>
		<input type = "password" name = "Haslo" class = "inputborder" placeholder="Haslo" />
		<br/>
		<input type = "password" name = "Haslo_2" class = "inputborder " placeholder="Powtorz Haslo" />
		<br/>
		<?php
		
				if(isset($_SESSION['error_nick']))
					{
						echo   $_SESSION['error_nick'];
						unset($_SESSION['error_nick']);
					}
		
			?>
			<br/>
			
			<?php
		
				if(isset($_SESSION['error_pass']))
					{
						echo   $_SESSION['error_pass'];
						unset($_SESSION['error_pass']);
					}
		
			?>
		<br/>
		<br/>
		
		<div id="zawartosc2" >
		<div class="g-recaptcha" data-sitekey="6LeCiSUTAAAAAIbWs6FA5C23Qz9m3cZEqlTr3U7v"></div>
		<br/>
		
		</div>
		<?php
		
				if(isset($_SESSION['error_bot']))
					{
						
						echo   $_SESSION['error_bot'];
						unset($_SESSION['error_bot']);
					}
		
			?>
		<br/>
		
		
		<div id="regulamin">
			
			<br/>
			<label>
				<input type= "checkbox"name= "regulamin" /> Apceptuje <a href="regulamin.html">regulamin</a> 
				
			</label>
			<br/>
			<br/>
			
			<?php
		
				if(isset($_SESSION['error_check']))
					{
						
						echo   $_SESSION['error_check'];
						unset($_SESSION['error_check']);
					}
		
			?>
			<br/>
			<br/>
			</div>
			
		
			
		</div>
		<br/>
		<br/>
		<br/>
		<br/>
		<div id="rejestracja_p">
		<br/>
		
		<input type="submit" class="button" value="Zarejestruj" />
		
		</div>
		
		
	<form/>
		
			
</div>


<div id="zawartosc_2"
	

</body>