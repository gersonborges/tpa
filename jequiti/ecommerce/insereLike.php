<?php
require_once '../config.php';
$con = new PDO(SERVIDOR, USUARIO, SENHA);

$sql = $con->prepare("INSERT INTO usuario_produto (usuario_id, produto_id) VALUES (?,?)");
$sql->execute([ $_SESSION['usuario']->id, $_GET['produto_id'] ]);

header("Location: ./");
