<?php 

$fila=10;
$columna=10;
$i=0;
$color=true;
define(tam, 10);

echo "<table  width= 50%>";
	for($x=0; $x<tam; $x++)
	{
		echo "<tr>";
		for($y=0; $y<tam;$y++){
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