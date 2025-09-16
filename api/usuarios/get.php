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

if (isset($_GET["medico"])) {
    $resultado = $banco->selectUsuariosMedicos([]);
    echo json_encode($resultado);
}