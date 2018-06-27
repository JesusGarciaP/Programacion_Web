<!doctype html>
<html>
	<head>
	<title>tabla</title>
		<link rel="stylesheet" type="text/css" href="css/tabla_css.css">
	</head>
	<body>
		<table class="tabla" border="2">
			<?php
				$_GET['box'];
				$n=$_GET['box'];
				//echo $n;

				for ($i=0; $i <=20 ; $i++) { 
					if ($i==0) {
						echo "<tr>";
							echo "<td>","num1","</td>";
							echo "<td>","operador","</td>";
							echo "<td>","num2","</td>";
							echo "<td>","operador","</td>";
							echo "<td>","resultado","</td>";
						echo "</tr>";
					}else{
						echo "<tr>";
							echo "<td>",$n,"</td>";
							echo "<td>","*","</td>";
							echo "<td>",$i,"</td>";
							echo "<td>","=","</td>";
							echo "<td>",$n*$i,"</td>";
						echo "</tr>";
					}
				}
			?>
		</table>
	</body>
</html>