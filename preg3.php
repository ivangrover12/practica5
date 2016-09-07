<?php 

$fila=9;
$columna=9;
$i=0;
$color=true;

echo "<table  width= 50% height= 70%>";
	for($x=0; $x<$fila; $x++)
	{
		echo "<tr>";
		for($y=0; $y<$columna;$y++){
			if($color){
				$color=false;
				$i++;
				echo "<td style=\"background: yellow\">".$i."</td>";
			}
			else{
				$color=true;
				$i++;
				echo "<td style=\"background: white\">".$i."</td>";

			}
		
		}
		echo "</tr>";
	}
echo "</table>";
 ?>