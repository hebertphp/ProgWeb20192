<?php
function mostra($msg){
  echo "<b>$msg</b>";
}

function calc($n1,$n2,$op){
    if($op=="+"){
       $res=$n1+$n2;
    }
    elseif($op=="-"){
        $res=$n1-$n2;
    }
    elseif($op=="*"){
        $res=$n1*$n2;
    }
    elseif($op=="/"){
        if($n2==0){
            $res="Divisão por zero!";
        }
        else{
            $res=$n1/$n2;
        }
    }
    else{
        $res="Operador desconhecido!";
    }
  return $res;
}  

function parimpar($n){  
  $msg=($n%2==0)?"PAR":"ÍMPAR";
  return $msg;
}

function dozero($zero, $um){
    $resultado=$zero * $um;
    return $resultado;
}

mostra("Vai que funciona!!!");
echo "<br>";
echo dozero(7,3);
echo "<br>";
echo parimpar(8);
echo "<br>";
echo calc(4,3,"+");
echo "<br>";
echo calc(4,3,"-");
echo "<br>";
echo calc(4,3,"*");
echo "<br>";
echo calc(4,3,"/");
echo "<br>";
echo calc(4,0,"/");
echo "<br>";
echo calc(4,3,"?");
?>
