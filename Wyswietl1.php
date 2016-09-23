<?php
	session_start();

?>

<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Wyszukiwanie1</title>
	<link rel="stylesheet" href="style1.css" type="text/css" />
	

</head>

<?php
	
	function get_products()
	{
		
		
		$usluga = $_POST['usluga'];
		$miasto = $_POST['miasto'];
		$km = $_POST['km'];
		$wagaod = $_POST['wagaod'];
		$wagado = $_POST['wagado'];
		
		
		require_once "connect1.php";
	
		$polaczenie = mysql_connect($host, $db_user. '');
		
		if(!$polaczenie)
		{
			die('can not connect to server');
		}
		
		$db = mysql_select_db($db_name, $polaczenie);
		if(!$db)
		{
			die('cannot connect to database');
		}
		
		$query = "SELECT * FROM ogloszenia WHERE id > 4";
		$data = mysql_query($query,$polaczenie);
		
		
		$products = array();
		
		while($object = mysql_fetch_object($data))
		{
			$products[] = $object;
		}
		
		
		mysql_close($polaczenie);
		return $products;
	}
	
	function get_table()
	{
		
		$table_str = '<table>';
		$products = get_products();
		$i = 1;
		foreach($products as $product )
		{
			$table_str.='<tr id = "wyniki_wyszukiwania">';
			$table_str.='<td>'.($i++).'</td>
			<td>'.$product->miasto.'</td>
			<td>'.$product->zasieg.'</td>
			<td>'.$product->cena.'</td>';
			$table_str.='</tr>';
		}
		$table_str.= '</table>';
		$_SESSION['czyzapytano'] = 1;
		return $table_str;
	}




?>


<body>

<?php
	echo "adasadasfsaf";
	echo get_table();
	header('Location: Homepage.php');
?>


</body>
</html>