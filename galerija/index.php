<?php 
error_reporting(0);
if ($_GET) {
	unlink("slike/" . $_GET['fajl']);
}
	//var_dump($_FILES);
if ($_FILES) {
	if ($_FILES['slika']['error'] == 0) {
		$ts = time();

		move_uploaded_file($_FILES['slika']['tmp_name'], 'slike/' . $ts . "_" .$_FILES['slika']['name']);

	}
}


 ?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Galerija</title>
</head>
<body>

<?php 
	$dir = opendir("slike");
	while ($fajl = readdir($dir)) {
	
		if($fajl !=  "." && $fajl != ".." && (substr($fajl, -4) == ".jpg" || substr($fajl, -4) == ".gif" || substr($fajl, -4) == ".png" || substr($fajl, -5) == ".jpeg") ) {

			?>
			<a href="slike/<?php echo $fajl; ?>" target="_blank"><img src="slike/<?php echo $fajl; ?>" alt="" width="140"></a>
			<a href="?fajl=<?php echo $fajl; ?>"> DELETE </a>
			<?php
		}

	}

 ?>

<form action="" method="POST" enctype="multipart/form-data">
	<input type="file" name="slika">
	<input type="submit" value="Upload">
</form>


</body>
</html>