
<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

include "conecta.php";
$query="select id_usuario, login, email from usuario order by login; ";
$result = mysqli_query($conn,$query) or die ("Erro sql: ".mysqli_error($conn));

$num_rows = mysqli_num_rows($result);

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
      <a class="nav-link " href="form_cad_usuario.php">Cadastrar</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="alt_exc_usuario.php">Alterar/Excluir</a>
    </li>
  </ul>
</nav>
<br>
<div class="container">
  <h2>Altera / Exclui Usuário</h2>
              
  <table class="table table-hover" id="tabela">
    <thead>
      <tr>
        <th>Login</th>
        <th>E-mail</th>
 		<th>Alterar</th>
		<th>Excluir</th>
      </tr>
    </thead>
    <tbody>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";    
        echo "<td>".$row["login"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td><a href='form_alt_usuario.php?id_usuario=".$row["id_usuario"]."' title='Editar ".$row["login"]."'><i class='fas fa-edit' style='font-size:24px;color:blue;'></i></a></td>";
     	echo "<td><a href='form_exc_usuario.php?id_usuario=".$row["id_usuario"]."' title='Excluir ".$row["login"]."'><i class='fas fa-times' style='font-size:24px;color:red;'></i></a></td>";
        echo "</tr>";
    }

    mysqli_free_result($result);
    
    
    ?>
      
      
    </tbody>
	
	

  </table>
</div>

</body>
</html>
