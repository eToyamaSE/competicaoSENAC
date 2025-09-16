<?php
class Usuario implements JsonSerializable {
    private $idUsuario;
    private $nome;
    private $cpf;
    private $email;
    private $senha;
    private $dataNascimento;
    private $telefone;
    private $especialidade;
    private $tipoUsuario;
    private $estado;
    private $cidade;
    private $bairro;
    private $rua;
    private $numero;
    private $chave;

    public function jsonSerialize(): array {
        return get_object_vars($this);
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getDataNascimento() {
        return $this->dataNascimento;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function getTipoUsuario() {
        return $this->tipoUsuario;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function getRua() {
        return $this->rua;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getChave() {
        return $this->chave;
    }
}