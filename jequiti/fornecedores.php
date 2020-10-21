<?php
require_once('config.php');
$con = new PDO(SERVIDOR, USUARIO, SENHA);

$sql = $con->prepare("SELECT * FROM fornecedor ORDER BY razao_social");
$sql->execute();
$rows = $sql->fetchAll(PDO::FETCH_CLASS);

echo json_encode($rows, JSON_PRETTY_PRINT);
