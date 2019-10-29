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
  <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-education"></span> PHP</a>
  
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Cadatrar</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="#">Alterar/Excluir</a>
    </li>
  </ul>
</nav><br>
<div class="container">
  <h2>Hover Rows</h2>
  <p>The .table-hover class enables a hover state (grey background on mouse over) on table rows:</p>            
  <table class="table table-hover" id="tabela">
    <thead>
      <tr>
        <th><span>Keywords</span></th>
        <th>Lastname</th>
        <th>Email</th>
		<th>Alterar</th>
		<th>Excluir</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
		<td><a href="#" title="Editar John"><i class="fas fa-edit" style="font-size:24px;color:blue;"></i></a></td>
		<td><a href="#" title="Excluir John"><i class="fas fa-times" style="font-size:24px;color:red;"></i></a></td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
		<td><a href="#" title="Editar Mary"><i class="fas fa-edit" style="font-size:24px;color:blue;"></i></a></td>
		<td><a href="#" title="Excluir Mary"><i class="fas fa-times" style="font-size:24px;color:red;"></i></a></td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
		<td><a href="#" title="Editar July"><i class="fas fa-edit" style="font-size:24px;color:blue;"></i></a></td>
		<td><a href="#" title="Excluir Dooley"><i class="fas fa-times" style="font-size:24px;color:red;"></i></a></td>		
      </tr>
    </tbody>
	
	

  </table>
</div>

</body>
</html>
