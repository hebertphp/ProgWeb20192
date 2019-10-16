
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
.container{
  margin-top:60px;
  width: 50%;
}
</style>
</head>
<body>

<div class="container alert alert-info">
  <h2>Formulário Login/Senha</h2>
  <p>Fonte: <a href="https://www.w3schools.com/bootstrap/" target="_BLANK">https://www.w3schools.com/bootstrap/</a> </p>
  <form method="post" action="recebe.php">
  <div class="input-group form-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="email" type="text" class="form-control" name="login" placeholder="Digite o Login" required>
  </div>
  <div class="input-group form-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="password" type="password" class="form-control" name="senha" placeholder="Digite a senha" required>
  </div>
    <div class="form-group">
      <div class="">
        <button type="submit" class="btn btn-default">Enviar!</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
