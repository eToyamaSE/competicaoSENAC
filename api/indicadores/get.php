<?php
// Indicadores

require_once "../../vida/datasource/Banco.php";
header("Content-Type: application/json");

$banco = new Banco();
$resultado = $banco->validarChave([$_COOKIE["chave"]]);

if ($resultado) {
    $usuario = $resultado[0];
    $resultado = $banco->selectIndicadores([$usuario->getIdUsuario()]);
    echo json_encode($resultado);
} else {
    http_response_code(401);
}