<table>

    <thead>

        <tr>
            <td>ID</td>
            <td>EMAIL</td>
            <td>SENHA</td>
        </tr>

    </thead>

    <tbody>

        <?php foreach ($usuarios as $usuario) { ?>

            <tr>
                <td> <?= $usuario->id ?> </td>
                <td> <?= $usuario->email ?> </td>
                <td> <?= $usuario->nome ?> </td>
            </tr>

        <?php } ?>

    </tbody>

</table>

