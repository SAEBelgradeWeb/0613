<?php 

	$home = array(
		'title' => 'Welcome to our site',
		'img' => 'http://p1.pichost.me/640/48/1711040.jpg',
		'text' => 'Home Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, iure, numquam delectus aperiam quidem vel enim illo cum repellendus obcaecati adipisci recusandae doloribus dolor officia optio quam totam quasi et.'
		);

	$products = array(
		'title' => 'Our products',
		'img' => 'http://p1.pichost.me/640/17/1399286.jpg',
		'text' => 'Products Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, iure, numquam delectus aperiam quidem vel enim illo cum repellendus obcaecati adipisci recusandae doloribus dolor officia optio quam totam quasi et.'
		);

	$about = array(
		'title' => 'About Us',
		'img' => 'http://p1.pichost.me/640/42/1657715.jpg',
		'text' => 'About Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, iure, numquam delectus aperiam quidem vel enim illo cum repellendus obcaecati adipisci recusandae doloribus dolor officia optio quam totam quasi et.'
		);

	$strane = array(
		'home' =>  $home,
		'products' => $products,
		'about' => $about
		);

	if($_GET) {
	$str = $_GET['strana'];
	} else {
		$str = "home";
	}



 ?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page</title>
</head>
<body>
	
	<ul>
		<li><a href="?strana=home">Home</a></li>
		<li><a href="?strana=products">Products</a></li>
		<li><a href="?strana=about">About Us</a></li>
		
	</ul>

	<h1><?php echo $strane[$str]['title']; ?></h1>
	<p>
		<img width= "250" src="<?php echo $strane[$str]['img']; ?>" alt="">
	<?php echo $strane[$str]['text']; ?>
	</p>

</body>
</html>