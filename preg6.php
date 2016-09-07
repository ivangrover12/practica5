<?php
$pred = array("elem1","elem2");
$v[1]=90;
$v[30]=7;
$v['e']=99;
$v['hola']=43;
foreach ($v as $indice => $valor)
{
 echo $indice.$valor."<br>";
}
foreach ($pred as $ind => $val)
{
  echo $ind.$val."<br>";
}
?>
</body>
</html>