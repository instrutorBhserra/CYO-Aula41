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

foreach( $links as $url){
	echo "<li><a href='$url'>$url</a></li>";
}
?>
	</ul>
</body>
</html>
