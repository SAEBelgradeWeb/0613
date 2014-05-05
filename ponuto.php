<?php 
echo "<h1>Svi nasi casovi PHPa ovog trimestra</h1>";
$pon = strtotime('next Monday',strtotime('1 Mar 2014'));
for($i=0;$i<16;$i++){
	$trenutnipon = date('l d.M.Y.',$pon + $i*7*24*60*60);
	$trenutniuto = date('l d.M.Y.',$pon + 24*60*60 + $i*7*24*60*60);
	echo "Ponedeljak: $trenutnipon <br>Utorak: $trenutniuto <br>";
}
?>