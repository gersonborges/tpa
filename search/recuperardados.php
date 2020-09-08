<?php
require_once('config.php');
$con = new PDO(SERVIDOR, USUARIO, SENHA);
$sql = $con->prepare("
SELECT
  p.*,
  e.cep,
  e.logradouro,
  e.numero,
  e.complemento,
  e.bairro,
  e.cidade,
  e.uf
FROM prestador p
LEFT JOIN endereco e ON p.id=e.prestador_id");
$sql->execute();
$rows = $sql->fetchAll(PDO::FETCH_CLASS);

echo json_encode($rows);
