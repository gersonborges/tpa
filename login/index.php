<!DOCTYPE html>
<html lang="en">
<head>
    <title>TPA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <style>
        nav {
            height: 50px;
            margin-top: 0;
            margin-botom: 0;
            padding: 0;
        }

        .conteudo {
            margin-top: 0;
            margin-botom: 0;
            padding-top: 180px;
        }

        footer {
            padding-top: 14px;
            height: 50px;
        }
    </style>

</head>

<body onload="startTime()">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
            <span class="text-success mr-sm-2">&nbsp;</span>
            <a class="btn btn-outline-success my-2 my-sm-0" href="/login">Login</a>
        </form>
    </div>
</nav>

<div class="container conteudo">

    <div class="row">

        <div class="col-sm-4">

        </div>

        <div class="col-sm-4">
            <form action="autenticacao.php">
                <div class="card">
                    <div class="card-header"><h2>Login</h2></div>
                    <div class="card-body">

                        <div class="alert alert-danger">Erro</div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input id="email" name="email" type="email" class="form-control"
                                   placeholder="Digite o email" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Senha:</label>
                            <input id="senha" name="senha" type="password" class="form-control"
                                   placeholder="Digite a senha">
                        </div>
                        <div class="form-group form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> Lembrar
                            </label>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>

<footer class="bg-success text-center fixed-bottom">
    <p>Cotemig</p>
</footer>

</body>
</html>



