<?php
// Usuarios

include_once "../../vida/datasource/Banco.php";

function gerarChave() {
    // gera uma chave com 64 caracteres
    return bin2hex(random_bytes(32));
}

$banco = new Banco();
$json = json_decode(file_get_contents("php://input"), true);

$resultado = $banco->insertUsuario([
    $json["nome"],
    $json["cpf"],
    $json["email"],
    password_hash($json["senha"], PASSWORD_DEFAULT),
    $json["dataNascimento"],
    $json["telefone"],
    $json["especialidade"],
    $json["tipoUsuario"],
    $json["estado"],
    $json["cidade"],
    $json["bairro"],
    $json["rua"],
    $json["numero"],
    gerarChave()
]);

header("Content-Type: application/json");
http_response_code(201);