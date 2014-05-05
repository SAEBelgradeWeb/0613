<?php 
	
	if (isset($_GET['bio'])){
	
		$biografija = $_GET['bio'];
	} else {
		$biografija = "Nema biografije";
	};

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profil</title>
</head>
<body>
	<h1>Brana Rakic</h1>
	<h3>Biografija</h3>
	<p><?php echo $biografija; ?></p>

	<form action="get_vezba.php" method="GET">
		<label for="bio">Username</label>
		<input type="text" id="bio" name="bio">
		<label for="godine">password</label>
		<input type="text" id="godine" name="godine">
		<input type="submit" value="Promeni">
	</form>
</body>
</html>