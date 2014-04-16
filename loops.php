<?php 

	// for ($i=0; $i<10;$i++){
	// 	echo "<h1>Naslov clanka broj $i</h1>";
	// 	echo "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, possimus, laborum, eos quisquam nulla animi dolor voluptatum officia voluptatem enim veniam harum magni vero veritatis distinctio dignissimos non inventore aut!</p>";
	// }
	// echo "<ul>";
	// for ($i=1; $i<=11; $i++){
	// 	echo "<li>$i</li>";
		
	// }
	// echo "</ul>";


$time = date('F', time());

if ( $time == 'April' ){
echo 'Dosao je april mesec. Zivelo prolece! <img src="http://www.fabuloussavers.com/new_wallpaper/Beautiful_Spring_Yellow_Flowers_freecomputerdesktopwallpaper_p.jpg" alt="">';
} else{
echo 'Jos uvek nije april, ali uskoro ce... <img src="http://data.whicdn.com/images/17730189/tumblr_luo9u8Sim21qmejd3o1_400_large.jpg" alt="">';
}

?>