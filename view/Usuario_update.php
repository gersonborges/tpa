<h2>Usuarios</h2>

<div class="panel panel-default">

    <div class="panel-body">

        <form action="./?classe=Usuario&acao=update&id=<?=$usuario->id?>" method="post">

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?=$usuario->email?>">
            </div>

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?=$usuario->nome?>">
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="./" class="btn btn-danger">Voltar</a>

        </form>

    </div>

</div>
<br>
<br>
