<?php
require_once('config.php');
$con = new PDO(SERVIDOR, USUARIO, SENHA);

// id, produto, preco_venda, categoria, fornecedor

$sql = $con->prepare("SELECT * FROM ver_produto");
$sql->execute();
$rows = $sql->fetchAll(PDO::FETCH_NUM); // RECUPERA SOMENTE DADOS NUM VETOR

$obj = (object) [ "data" => $rows ];

echo json_encode($obj, JSON_PRETTY_PRINT);
