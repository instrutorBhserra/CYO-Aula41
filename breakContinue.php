<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Aula 41</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Aula 41</h1>
	<!-- Use um array para escrever essas páginas -->
	<ul>
<?php
$links = array(
	"while.php",
	"do_while.php",
	"for.php",
	"foreach.php",
	"breakContinue.php",
);
if(isset($_GET["ommit"])){
	$ommit= $_GET["ommit"];
}
if(isset($_GET["until"])){
	$until= $_GET["until"];
}

foreach( $links as $url){
	if($url == $ommit){
		continue;
	}
	echo "<li><a href='$url'>$url</a></li>";
	if($url == $until){
		break;
	}
}
?>
	</ul>
</body>
</html>
