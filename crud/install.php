<?php

include "conecta.php";

$query = 
"create table IF NOT EXISTS usuario(
id_usuario int not null primary key auto_increment,
login varchar(30) not null,
senha varchar(32) not null,
email varchar(150) not null,
data date,
obs varchar(200)
);";


$result = mysqli_query($conn,$query) or die ("Erro sql: ".mysqli_error($conn));

echo "Tabela criado com Sucesso!";


mysqli_close($conn);
?>