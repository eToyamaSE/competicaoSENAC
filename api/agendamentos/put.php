<?php
// Agendamentos

require_once "../../vida/datasource/Banco.php";
header("Content-Type: application/json");

$banco = new Banco();
$resultado = $banco->validarChave([$_COOKIE["chave"]]);

if ($resultado) {
    $usuario = $resultado[0];
    $json = json_decode(file_get_contents("php://input"), true);
    $banco->updateAgendamento([
        $json["data"],
        $json["hora"],
        $usuario->getIdUsuario(),
        $json["idMedico"],
        $json["idAgendamento"],
    ]);

    http_response_code(202);
} else {
    http_response_code(401);
}