<?php
require_once('config.php');
$con = new PDO(SERVIDOR, USUARIO, SENHA);
$sql = $con->prepare("
SELECT nome FROM prestador ORDER BY nome");
$sql->execute();
$rows = $sql->fetchAll(PDO::FETCH_CLASS);
echo json_encode($rows);
