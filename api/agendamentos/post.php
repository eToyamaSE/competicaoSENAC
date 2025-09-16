<?php
// Agendamentos

require_once "../../vida/datasource/Banco.php";
header("Content-Type: application/json");

if (!isset($_COOKIE["chave"])) {
    http_response_code(401);
    return;
}

$banco = new Banco();
$resultado = $banco->validarChave([$_COOKIE["chave"]]);

if ($resultado) {
    $usuario = $resultado[0];
    $json = json_decode(file_get_contents("php://input"), true);
    $banco->insertAgendamento([
        $json["data"],
        $json["hora"],
        $usuario->getIdUsuario(),
        $json["idMedico"],
    ]);

    http_response_code(201);
} else {
    http_response_code(401);
}