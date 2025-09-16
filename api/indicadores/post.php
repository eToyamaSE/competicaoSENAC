<?php
// Indicadores

require_once "../../vida/datasource/Banco.php";
header("Content-Type: application/json");

$banco = new Banco();
$resultado = $banco->validarChave([$_COOKIE["chave"]]);

if ($resultado) {
    $usuario = $resultado[0];
    $json = json_decode(file_get_contents("php://input"), true);
    $banco->insertIndicador([
        $json["data"],
        $json["tipo"],
        $json["valor"],
        $usuario->getIdUsuario(),
    ]);

    http_response_code(201);
} else {
    http_response_code(401);
}