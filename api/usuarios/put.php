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

$json = json_decode(file_get_contents("php://input"), true);
$resultado = $banco->updateUsuario([
    $json["nome"],
    $json["cpf"],
    $json["email"],
    $json["senha"],
    $json["dataNascimento"],
    $json["telefone"],
    $json["especialidade"],
    $json["tipoUsuario"],
    $json["estado"],
    $json["cidade"],
    $json["bairro"],
    $json["rua"],
    $json["numero"],
    $json["idUsuario"],
]);

http_response_code(202);