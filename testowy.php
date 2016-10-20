<?php
session_start();
	
?>


<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Homepage</title>
	<link rel="stylesheet" href="style1.css" type="text/css" /> 
	

</head>
<body>


<form action="upload.php" method="post" enctype="multipart/form-data" >
	Wybierz zdjęcia:
		<input type="file" name="photo" id="zdjecieup">
			<input type="submit" value="Upload Image" name="submit">


</body>




</html>