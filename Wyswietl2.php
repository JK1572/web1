<?php
	session_start();

?>

<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Wyszukiwanie</title>
	<link rel="stylesheet" href="style1.css" type="text/css" />
	

</head>

<?php
	
	function get_products()
	{
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
		
		$query = "SELECT * FROM ogloszenia WHERE id >10";
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
		return $table_str;
	}




?>


<body>

<?php

	echo get_table();

?>


</body>
</html>