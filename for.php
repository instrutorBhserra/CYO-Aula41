<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>For</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="table.css">
</head>
<body>
	<h1>For</h1>
<table>
<?php
for($row =1; $row <=8; ++$row){
?>
<tr>
	<?php
			for($col =1; $col <=8; ++$col){
				if(($row+$col)%2 == 0) $class = "dark";
				else $class = "light";
				echo "<td class='$class'></td>";
			}
	?>
		</tr>
	<?php
}

?>
</table>
</body>
</html>
