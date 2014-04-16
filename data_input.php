<?php 
	
	//var_dump($_GET);	

	$br1 = $_GET['br1'];
	$br2 = $_GET['br2'];
	
function sabiranje($br1, $br2) {
	$rezultat = $br1 + $br2;
	return $rezultat;
}

echo sabiranje($br1, $br2);
 ?>