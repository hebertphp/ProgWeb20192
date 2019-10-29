<?php
$conn = mysqli_connect("localhost", "root", "root", "php192");
if (mysqli_connect_errno()) {
    echo "Falha na conexão: ".mysqli_connect_error();
    exit();
}
?>

