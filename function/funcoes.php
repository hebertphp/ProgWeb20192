<?php
function mostra($msg){
  echo "<b>$msg</b>";
}
function calc($n1,$n2,$op){
    if($op=="+"){
       $res=$n1+$n2;
    }
  return $res;
}  

function parimpar($n){  
  $msg=($n%2==0)?"PAR":"ÍMPAR";
  return $msg;
}

?>
