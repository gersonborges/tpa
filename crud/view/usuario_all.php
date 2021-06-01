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

    <div class="container mt-4">

        <h1>Usuários
        
        <a href="./?acao=create" class="btn btn-primary" style="float:right">Novo</a>
        
        </h1>

        <table class="table table-striped table-bordered">
            <tr>
                <th>Email</th>
                <th>Nome</th>
                <th>Ação</th>
            </tr>

            <?php foreach($usuarios as $usuario){ ?> 
                <tr>
                    <td><?=$usuario->email?></td>
                    <td><?=$usuario->nome?></td>
                    <td>
                    <!--a href="./?acao=update&id=< ?=$usuario->id?>" class="btn btn-success">Ver</a-->
                    <a href="./?acao=update&id=<?=$usuario->id?>" class="btn btn-warning">Editar</a>
                    <!--a href="./?acao=delete&id=< ?=$usuario->id?>" class="btn btn-danger">Excluir</a-->
                    </td>
                </tr>
            <?php } ?>
        
        </table>
    
    </div>

</body>

</html>