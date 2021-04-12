<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Usuários cadastrados</h2>
  <p>Listagem em ordem alfabética dos usuários da biblioteca</p>            
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Email</th>
        <th>Nome</th>
      </tr>
    </thead>
    <tbody>

    <?php foreach($usuarios as $usuario){ ?> 
    
      <tr>
        <td><?=$usuario->id?></td>
        <td><?=$usuario->email?></td>
        <td><?=$usuario->nome?></td>
      </tr>
    
    <?php } ?>
      
    </tbody>
  </table>
</div>

</body>
</html>
