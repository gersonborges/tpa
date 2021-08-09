<?php
require_once "inc/config.php";
require_once "controller/AlunoController.php";
require_once "model/Aluno.php";

$app = new AlunoController();

$app->create();



