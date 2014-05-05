<?php
	$datum = "01 June 2014";
	$dan = date('d',strtotime($datum));
	$mesec = date('M',strtotime($datum));
	$godina = date('Y',strtotime($datum));
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

<?php for ($j=1;$j<=12;$j++){ 

	//echo '1.'.$j.'.'.$godina.'.';
	$mesec = date('M',strtotime('1.'.$j.'.'.$godina.'.'));  // $j je broj, pretvaramo u rec tipa June\

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
	
<?php }; ?>






</body>
</html>