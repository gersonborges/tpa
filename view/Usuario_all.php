<a class="btn btn-primary" href="./?classe=Usuario&acao=create">Novo</a>

<table>

    <thead>

        <tr>
            <td>ID</td>
            <td>EMAIL</td>
            <td>SENHA</td>
            <th>AÇÕES</th>
        </tr>

    </thead>

    <tbody>

        <?php foreach ($usuarios as $usuario) { ?>

            <tr>
                <td> <?= $usuario->id ?> </td>
                <td> <?= $usuario->email ?> </td>
                <td> <?= $usuario->nome ?> </td>
                <td><a class="btn btn-primary" href="./?classe=Usuario&acao=update&id=<?= $usuario->id ?>">Editar</a> </td>
            </tr>

        <?php } ?>

    </tbody>

</table>

