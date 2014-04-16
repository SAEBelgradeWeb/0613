<?php 

	
	$now = time();
	
	$ujutro = strtotime("6:00AM");
	$uvece = strtotime("8:00PM");

	$j = $now - $ujutro; //to je razlika od jutra do sada (4h)
	$d = $uvece - $ujutro; //to je razlika izmedju jutra i veceri (14h)


	if ($j >= 0  && $j < $d) {
		$class = "dan";
	} else {
		$class = "noc";
	}

	if($_GET) {
		$class = $_GET['klasa'];
	}
 ?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dan - Noc</title>
	<link rel="stylesheet" href="css/dan_noc.css">
</head>
<body class="<?php echo $class; ?>">

	<a href="dan_noc.php?klasa=dan">Dan</a> <br>
	<a href="dan_noc.php?klasa=noc">Noc</a>
</body>
</html>