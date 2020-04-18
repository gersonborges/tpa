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
                <td>
                    <a class="btn btn-primary" href="./?classe=Usuario&acao=update&id=<?= $usuario->id ?>">Editar</a> 
                    <button
                                type='button'
                                class='btn btn-danger'
                                data-toggle='modal'
                                data-target='#exclui-modal-<?=$usuario->id?>'
                                data-id='<?=$usuario->id?>'>
                            Excluir
                    </button>                
                </td>
            </tr>
        
        
            <div class="modal fade" id="exclui-modal-<?=$usuario->id?>">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Cabeçalho -->
                            <div class="modal-header">
                                <h4 class="modal-title">Excluir</h4>
                                <button type="button" class="close" data-dismiss="modal">×</button>
                            </div>

                            <!-- Corpo -->
                            <div class="modal-body">
                                Confirma exclusão?
                            </div>

                            <!-- Rodapé -->
                            <div class="modal-footer">
                                <a class="btn btn-primary" href="./?classe=Usuario&acao=delete&id=<?= $usuario->id ?>">Sim</a>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
                            </div>

                        </div>
                    </div>
            </div>

        <?php } ?>

    </tbody>

</table>

