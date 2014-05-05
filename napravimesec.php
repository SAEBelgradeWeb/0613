<?php 
// stranica za slanje requesta

// hocemo da nam se isprinta mesec u kalandaru sa obelezenim danom

 ?>

 <!doctype html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Daj mi mesec</title>
 </head>
 <body>
 	
	<h1>Unesite datum u formu</h1>

	<form action="prestupna.php" method="POST">
			<label for="dan">Dan</label><input type="text" name="dan">	
			<label for="mesec">Mesec</label><input type="text" name="mesec">	
			<label for="godina">Godina</label><input type="text" name="godina">	
			<input type="submit" value="Posalji!">
	</form>
	<?php //echo $_GET['mesec']; ?>

 </body>
 </html>