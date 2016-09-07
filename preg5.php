<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
 <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
 <title>preg5</title>
</head>
<body>
<?php
echo "<h1>Tabla de imagen con Enlace</h1>";

echo "<table border=1>";
$puntero = opendir('imagen');
$i=1;
while (false !== ($imagen = readdir($puntero)))
{
 if ($imagen!="." && $iamgen!="..")
 {
 if ($i==1)
 echo "<tr>";
 echo "<td><a href='imagen/$imagen'> <img src='imagen/$imagen' width=100 height=100></img> </a></td>";
 if ($i==4)
 {echo "</tr>"; $i=0;}
 $i++;
 }
}
closedir($puntero);
echo "</table>";
?>
</body>
</html>