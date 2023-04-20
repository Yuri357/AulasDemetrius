<?php

$variavel = 10;
if ($variavel <20){
 echo "É menor que 20";
  }  else {
    echo "É maior que 20";
 }

echo "<br><br>";

for($i=0; $i<=10; $i++) {
echo $i." ";
}


echo "<br><br>";
echo "usando while";
echo "<br><br>";


$j ="0";
while($j <= 10) {
    echo $j." ";
    $j++;
}

echo "<br><br>";
echo "usando switch... case<br>";

$switch = 1;
switch ($switch) {
    case 1: echo "numero 1";
     break;
    default: echo "Não é o valor informado";
     break; 


}














?>