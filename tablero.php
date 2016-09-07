<?php 

$fila=10;
$columna=10;
$i=0;
$color=true;

echo "<table>";
	for($x=0; $x<$fila;$x++)
	{
		echo "<tr>";
		for($y=0; $y<$columna;$y++){
			if($color){
				$color=true;
				$i++;
				echo "<td style=\"background: blue\">".$i."</td>";
			}
			else{
				$color=false;
				$i++;
				echo "<td style=\"background: blue\">".$i."</td>";

			}
		
		}
		echo "</tr>";
	}
echo "</table>";
 ?>