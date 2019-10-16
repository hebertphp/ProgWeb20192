<?php
$uf=array("SP","RJ","MG");
foreach ($uf as $pos => $valor){
    echo "$pos = > $valor <br>";
}
echo "<hr>";
$produto=array( "nome" => "Notebook",
               "preco" => 3500.50,
               "quantidade" => 15);
foreach ($produto as $pos => $valor){
    echo "$pos = > $valor <br>";
}
echo "<hr>";
$arr=array("PHP_SELF", "REQUEST_METHOD", "REMOTE_ADDR","SERVER_ADDR");

foreach ($_SERVER as $pos => $valor){
    if (in_array($pos, $arr)){
        echo "$pos = > <b>$valor</b> <br>";
    }
}

?>
