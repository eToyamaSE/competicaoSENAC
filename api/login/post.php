<?php
// login

include_once "../../vida/datasource/Banco.php";
header("Content-Type: application/json");

$banco = new Banco();
$json = json_decode(file_get_contents("php://input"), true);
$resultado = $banco->login([
    $json["email"],
]);

if ($resultado && password_verify($json["senha"], $resultado[0]->getSenha())) {
    http_response_code(200);
    setcookie("chave", $resultado[0]->getChave(),[
        "path" => "/",
        "httponly" => true,
        "samesite" => "Strict"
    ]);
} else {
    http_response_code(401);
}