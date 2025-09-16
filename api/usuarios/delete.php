<?php
// Usuarios

require_once "../../vida/datasource/Banco.php";
header("Content-Type: application/json");

$banco = new Banco();
$usuario = $banco->validarChave([$_COOKIE["chave"]]);

if (empty($usuario)) {
    http_response_code(401);
    return;
}

$banco->deleteUsuario([$_GET["id"]]);

http_response_code(202);