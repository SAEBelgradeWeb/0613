<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Constants lesson</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="js/main.js"></script>
</head>
<body>
	<h1>Lesson</h1>
	<p>
	<?php
		// $mystring = 'brakicsae.edu';
		// $findme   = '@';
		// $pos = strpos($mystring, $findme);

		$email = 'branko@hotmail.com';

	if (strpos($email,'@') && strpos($email,'.') && (strpos($email,'@') +1 < strpos($email,'.') )) {
		
			echo "Dobar je mejl";

	} else {
		
		echo 'Mejl nije dobar';
	};

	 ?>


</body>
</html>