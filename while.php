<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>While</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>While</h1>
<div class="container">
<ul>
<?php
$test = true;
$i = 0;
while($test){
	echo "<li>$i</li>\n";
	if(++$i >= 5){
		$test = false;
	}
}
?>
</ul>
<ul>
<?php
$i = 5;
while($i-->=1){
	echo "<li>$i</li>\n";
}
/*
*/
?>
</ul>
<ul>
<?php
$i = 32;
while($i>=1){
	$i/=2;
	echo "<li>$i</li>\n";
}
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
