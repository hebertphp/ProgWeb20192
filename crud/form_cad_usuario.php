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
      <a class="nav-link active" href="form_cad_usuario.php">Cadastrar</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="alt_exc_usuario.php">Alterar/Excluir</a>
    </li>
  </ul>
</nav>
<br>

<div class="container">
  <h2>Cadastra Usuário</h2>
  <form action="rec_cad_usuario.php" method="post">
  
    <div class="form-group">
      <label for="login">Login:</label>
      <input type="login" class="form-control" id="login" placeholder="Digite o Login" name="login" required>
    </div>
	<div class="form-group">
      <label for="senha">Senha:</label>
      <input type="password" class="form-control" id="pwd" placeholder="digite a senha" name="senha" required>
    </div>
	<div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Digite o E-mail" name="email" required>
    </div>
    <div class="form-group">
		<label for="obs">Observação:</label>
		<textarea class="form-control" rows="5" id="comment" name="obs"></textarea>
	</div>
    
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
</div>



</body>
</html>
