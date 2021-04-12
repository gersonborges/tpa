<?php
require_once "inc/config.php";
require_once "controller/UsuarioController.php";
require_once "model/Usuario.php";

$app = new UsuarioController();
$app->all();


