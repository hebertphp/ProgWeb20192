<?php
if ($_SERVER["REQUEST_METHOD"]!="POST"){
    header("location: login.php");
    exit();
}

$login = filter_input(INPUT_POST, 'login',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$senha = filter_input(INPUT_POST, 'senha',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

echo "Login: $login<br>Senha: $senha";

?>
