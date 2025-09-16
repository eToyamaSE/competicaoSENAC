<?php

include_once "sql.php";
include_once __DIR__ . "/../models/Usuario.php";
include_once __DIR__ . "/../models/Indicador.php";
include_once __DIR__ . "/../models/Agendamento.php";

class Banco {
    private $local = "localhost";
    private $porta = 3306;
    private $nome = "vida";
    private $usuario = "root";
    private $senha = "nihonjin";

    private $banco;

    public function __construct() {
        $conexao = "mysql:host=$this->local;port=$this->porta;dbname=$this->nome;charset=utf8mb4";
        $this->banco = new PDO($conexao, $this->usuario, $this->senha);
    }

    function executar($consulta, $params, $tabela) {
        $instrucao = $this->banco->prepare($consulta);
        foreach ($params as $i => $valor) {
            $instrucao->bindValue($i+1, $valor);
        }
        $instrucao->execute();

        return $instrucao->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, $tabela);
    }

    // Autenticação
    function validarChave($params) {
        return $this->executar(SELECT_USUARIO_POR_CHAVE, $params, Usuario::class);
    }
    function login($params) {
        return $this->executar(LOGIN, $params, Usuario::class);
    }

    // Usuarios
    function selectUsuariosMedicos($params) {
        return $this->executar(SELECT_USUARIO_MEDICO, $params, Usuario::class);
    }

    function insertUsuario($params) {
        return $this->executar(INSERT_USUARIO, $params, Usuario::class);
    }

    function updateUsuario($params) {
        return $this->executar(UPDATE_USUARIO, $params, Usuario::class);
    }

    function deleteUsuario($params) {
        return $this->executar(DELETE_USUARIO, $params, Usuario::class);
    }

    // Agendamentos
    public function selectAgendamentos($params) {
        return $this->executar(SELECT_AGENDAMENTO, $params, Agendamento::class);
    }
    public function insertAgendamento($params) {
        return $this->executar(INSERT_AGENDAMENTO, $params, Agendamento::class);
    }
    public function updateAgendamento($params) {
        return $this->executar(UPDATE_AGENDAMENTO, $params, Agendamento::class);
    }
    public function deleteAgendamento($params) {
        return $this->executar(DELETE_AGENDAMENTO, $params, Agendamento::class);
    }

    // Inicadores
    public function selectIndicadores($params) {
        return $this->executar(SELECT_INDICADOR, $params, Indicador::class);
    }
    public function insertIndicador($params) {
        return $this->executar(INSERT_INDICADOR, $params, Indicador::class);
    }
    public function updateIndicador($params) {
        return $this->executar(UPDATE_INDICADOR, $params, Indicador::class);
    }
    public function deleteIndicador($params) {
        return $this->executar(DELETE_INDICADOR, $params, Indicador::class);
    }
}