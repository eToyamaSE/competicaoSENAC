<?php
// Agendamentos

require_once "../../vida/datasource/Banco.php";
header("Content-Type: application/json");

$banco = new Banco();
$resultado = $banco->validarChave([$_COOKIE["chave"]]);

if ($resultado) {
    $usuario = $resultado[0];
    $agendamentos = $banco->selectAgendamentos([$usuario->getIdUsuario()]);
    echo json_encode($agendamentos);
} else {
    http_response_code(401);
}