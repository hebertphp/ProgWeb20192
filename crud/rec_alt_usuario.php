<?php

if(!isset($_POST["login"])){
	 header("location: alt_exc_usuario.php");
	exit;
}

include "conecta.php";
$id_usuario = filter_input(INPUT_POST, 'id_usuario',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$login = filter_input(INPUT_POST, 'login',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$senha = filter_input(INPUT_POST, 'senha',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$obs = filter_input(INPUT_POST, 'obs',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$query="update usuario set login='$login', senha=md5('$senha'), email='$email', obs='$obs' where id_usuario=$id_usuario;";
        
$result = mysqli_query($conn,$query) or die ("Erro sql: ".mysqli_error($conn));
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-education"></span> PHP</a>
  
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link " href="form_cad_usuario.php">Cadatrar</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="alt_exc_usuario.php">Alterar/Excluir</a>
    </li>
  </ul>
</nav>
<br>

<div class="container">
   <div class="alert alert-success">
    <strong>Successo!</strong> Usuário alterado.
  </div>
  <a href="alt_exc_usuario.php" class="btn btn-info" role="button">Voltar</a>
</div>    
</body>
</html>