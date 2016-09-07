<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<h1>Ingresar Tres Numeros</h1>
<form action="" method="post">
	<label>1º Numero</label>
	<input type="text" name="uno" value="">
	<br>
	<label>2º Numero</label>
	<input type="text" name="dos" value="">
    <br>
	<label>3º Numero</label>
	<input type="text" name="tres" value="">
	<br>
	<input type="submit" value="Enviar">
</form>
<?php 
$a = $_POST["uno"];
$b = $_POST["dos"];
$c = $_POST["tres"];

//$a = 15;
//$b = 8;
//$c = 20;
 
// se busca la mayor
// otra forma de hacerlo
if ($a > $b) {
   // $mayor = $a;
   // $menor = $b;
//$medio = $c;
 
   if ($b > $c){
       $mayor = $a;
   	   $medio = $b;
       $menor = $c;}
  if ($c > $a){
      $mayor = $c;
  	  $medio = $a;
  	  $menor = $b;}
} else {
    //$mayor = $b;
    //$menor = $a;
 	
    if ($a > $c){
        $menor = $c;
 		$medio = $a;
 		$mayor = $b;}
    if ($c > $b){
        $mayor = $c;
    	$medio = $b;
    	$menor = $a;}
}	
 
echo 'la mayor es: ' . $mayor . '<br />';
echo 'la medio es: ' . $medio . '<br />';
echo 'la menor es: ' . $menor . '<br />';
 
?>

</body>
</html>