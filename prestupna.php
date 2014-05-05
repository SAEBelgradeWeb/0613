<?php
	//$datum = "01 June 2014";
	
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kalendar</title>
	<style>
	table{
		border: 2px solid green;
		background-color: #eeeeee;	
			}
	td {
		border-left: 1px solid black;
		border-bottom: 1px solid black;
	}		
		</style>
</head>
<body>

	<?php  if (isset($_POST['dan']) && isset($_POST['mesec']) && isset($_POST['godina']) 
				&& strlen($_POST['dan'])>0 
				&& strlen($_POST['mesec'])>0 
				&& strlen($_POST['godina'])>0 
				){  


			$datum = $_POST['dan']." ".$_POST['mesec']." ".$_POST['godina'];
			$dan = date('d',strtotime($datum));
			$mesec = date('M',strtotime($datum));
			$godina = date('Y',strtotime($datum));
			echo $godina;
		?>
	
	<table>
		<thead><?php echo $mesec; ?></thead>
		<tr>
			<td>Mo</td>
			<td>Tu</td>
			<td>We</td>
			<td>Th</td>
			<td>Fr</td>
			<td>Sa</td>
			<td>Su</td>
		</tr>
	<?php
	// nalazimo koji je dan prvi datum u mesecu  
		$prvidan = date('N',strtotime("1 ".$mesec." ".$godina)); //1 May 2014
		echo "<tr>"; // otovaramo prvi red
		for ($i=1;$i<$prvidan;$i++){
			echo "<td></td>"; // ispisujemo prazne celije
		}
		// sada se ovde nalazimo tacno na mestu gde treba da pocnemo da punimo sa brojevima
		// koliko ima dana u mesecu?
		$brojdana = date('t',strtotime($mesec));
		$indekspolja = $prvidan;
		for ($i=1;$i<=$brojdana;$i++){
			if ($i==$dan){
				echo "<td><strong>$i</strong></td>";
			}else {
				echo "<td>$i</td>";	
			}
		
			if ($indekspolja % 7 == 0){
				echo "</tr><tr>";
			}
			$indekspolja++;

		}
		echo "</tr>";

	?>

	</table>
	<?php } else { ?>
			
		<h1>Unesite datum u formu</h1>
			<?php if (isset($_POST['godina']) && !strlen($_POST['godina'])>0){
				echo "Nisi uneo godinu care";
			} ?>
	<form action="prestupna.php" method="POST">
			<label for="dan">Dan</label><input type="text" name="dan" id="dan">	
			<label for="mesec">Mesec</label><input type="text" name="mesec" id="mesec">	
			<label for="godina">Godina</label><input type="text" name="godina" id="godina">
			<br>
			<input type='password' name='password' />	
			<input type="submit" value="Posalji!">
	</form>

	<?php }; ?>
</body>
</html>