<!DOCTYPE html>
<html lang="en">

<head>
    <title>Alunos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Alunos</h2>


        <table class="table">
            <thead>
                <tr>
                    <th>Turma</th>
                    <th>Numero</th>
                    <th>Nome do aluno</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($alunos as $aluno) { ?>}
                    <tr>
                        <td><?= $aluno->turma ?></td>
                        <td><?= $aluno->numero ?></td>
                        <td><?= $aluno->nome ?></td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>

</body>

</html>
