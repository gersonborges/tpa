<?php
require_once('config.php');
$con = new PDO(SERVIDOR, USUARIO, SENHA);

switch ( $_POST['movimentacao'] ){
    case 'compra' :
        $sql = $con->prepare("INSERT INTO compra 
        (data, codigo_barra, nome, quantidade_comprada, preco_compra, volume, unidade_medida, fornecedor_id, categoria_id, usuario_id) VALUES 
        (?,?,?,?,?,?,?,?,?,?)");
        break;
    case 'venda' :
        $sql = $con->prepare("INSERT INTO venda 
        (data, codigo_barra, nome, quantidade_vendida, preco_venda, volume, unidade_medida, fornecedor_id, categoria_id, usuario_id) VALUES 
        (?,?,?,?,?,?,?,?,?,?)");
        break;
}

$sql->execute([
    $_POST['data'],
    $_POST['codigo_barra'],
    $_POST['nome'],
    $_POST['quantidade'],
    $_POST['preco'],
    $_POST['volume'],
    $_POST['unidade_medida'],
    $_POST['fornecedor_id'],
    $_POST['categoria_id'],
    $_SESSION['usuario']->id
]);

//echo $sql->errorInfo()[2];
header("Location: data.html");
