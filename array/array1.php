<?php
$a[]=10;
$a[]=25;
$a[]=12;

echo "<br> a[0]=".$a[0];
echo "<br> a[1]=".$a[1];
echo "<br>Contagem de a =".count($a);

$uf=array("SP","RJ","MG","PA","SC");

echo "<br> uf[0]=".$uf[0];
echo "<br> uf[2]=".$uf[2];
echo "<br>Contagem de uf =".count($a);

$aluno=array(          0 => "João",
                       1 => "Bete",
                       2 => "Noeli",
                       3 => "Jesebel");
              
echo "<br> aluno[3]=".$aluno[3];
echo "<br>Contagem de aluno = ".count($aluno);
?>
