<?php 

function shuffle_nums($min, $max, $count)
{
	$nums = range($min, $max);
	shuffle($nums);

	$response = array();
	for($i=0;$i<$count && $i<count($nums);$i++)
	{
		array_push($response, $nums[$i]);
	}
	return $response;
}
echo "<h1>Simulador lanzamiento de 2 dados</h1>";
echo "<pre>";
print_r(shuffle_nums(1, 6, 2));
echo "</pre>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<h1>Simulador lanzamiento de 6 dados</h1>";
echo "<pre>";
print_r(shuffle_nums(1, 6, 5));
echo "</pre>";
 ?>