<?php
// Indicadores

require_once "../../vida/datasource/Banco.php";
header("Content-Type: application/json");

$banco = new Banco();
$resultado = $banco->validarChave([$_COOKIE["chave"]]);

if ($resultado) {
    $usuario = $resultado[0];
    $banco->deleteAgendamento([$usuario->getIdUsuario()]);

    http_response_code(202);
} else {
    http_response_code(401);
}