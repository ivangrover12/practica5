<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
<h1>Ingresar Tres Numeros</h1>
<form action="" method="post">
  <label>Introducir Fecha</label>
  <input type="text" name="uno" value="" size="5" maxlength="4"> /  <input type="text" name="dos" value="" size="5" maxlength="4"> /
  <input type="text" name="tres" value="" size="5" maxlength="4">  
  <br>
  <input type="submit" value="Enviar Fecha">
</form>
<?php 
$a = $_POST["dos"];
 if ($a == 01) {
    echo "<h1>La fecha es ".$_POST["uno"].              " de Enero de ".$_POST["tres"]."</h1>";
} elseif ($a == 02) {
    echo "<h1>La fecha es ".$_POST["uno"].              " de Febrero de ".$_POST["tres"]."</h1>";
 
} elseif ($a == 03) {
    echo "<h1>La fecha es ".$_POST["uno"].              " de Marzo de ".$_POST["tres"]."</h1>";
 
} elseif ($a == 04) {
    echo "<h1>La fecha es ".$_POST["uno"].              " de Abril de ".$_POST["tres"]."</h1>";
 
} elseif ($a == 05) {
    echo "<h1>La fecha es ".$_POST["uno"].              " de Mayo de ".$_POST["tres"]."</h1>";
 
} elseif ($a == 06) {
    echo "<h1>La fecha es ".$_POST["uno"].              " de Junio de ".$_POST["tres"]."</h1>";
 
} elseif ($a == 07) {
    echo "<h1>La fecha es ".$_POST["uno"].              " de Julio de ".$_POST["tres"]."</h1>";
 
} elseif ($a == 08) {
    echo "<h1>La fecha es ".$_POST["uno"].              " de Agosto de ".$_POST["tres"]."</h1>";
 
} elseif ($a == 09) {
    echo "<h1>La fecha es ".$_POST["uno"].              " de Septiembre de ".$_POST["tres"]."</h1>";
 
} elseif ($a == 10) {
    echo "<h1>La fecha es ".$_POST["uno"].              " de Octubre de ".$_POST["tres"]."</h1>";
 
} elseif ($a == 11) {
    echo "<h1>La fecha es ".$_POST["uno"].              " de Noviembre de ".$_POST["tres"]."</h1>";
 
} elseif ($a == 12) {
    echo "<h1>La fecha es ".$_POST["uno"].              " de Diciembre de ".$_POST["tres"]."</h1>";
} 
else{
  echo "----------------";
}
?>

</body>
</html>