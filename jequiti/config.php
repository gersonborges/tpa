<?php
session_start();
header('Content-Type: application/json' );
date_default_timezone_set('America/Argentina/Buenos_Aires');

define("SERVIDOR","mysql:host=localhost;dbname=jequiti3a2;charset=utf8");
define("USUARIO","root");
define("SENHA","");
