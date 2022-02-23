<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Do While</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Do While</h1>
<div class="container">
<ul>
<?php
$test = false;
$i = 0;
do{
	echo "<li>$i</li>\n";
} while($test)
?>
</ul>
<ul>
<?php
$i = 5;
do{
	echo "<li>$i</li>\n";
} while(--$i > 0)
/*
*/
?>
</ul>
<ul>
<?php

if(isset($_GET["start"])){
	$i= $_GET["start"];
} else{
	$i = 32;
}

do{
	$i/=2;
	echo "<li>$i</li>\n";
} while($i>1)
/*
*/
?>
</ul>
<ul>
<?php
$str = "Batata";
$i = 0;
while($i<strlen($str)){
	echo "<li>${str[$i++]}</li>\n";
}
?>
</ul>
</div>

</body>
</html>
