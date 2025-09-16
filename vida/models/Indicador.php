<?php

class Indicador implements JsonSerializable {
    private $idIndicador;
    private $data;
    private $tipo;
    private $valor;
    private $idPaciente;

    public function jsonSerialize(): array {
        return get_object_vars($this);
    }

    public function getIdIndicator() {
        return $this->idIndicador;
    }

    public function getData() {
        return $this->data;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getIdPaciente() {
        return $this->idPaciente;
    }
}