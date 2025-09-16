<?php

class Agendamento implements JsonSerializable {
    private $idAgendamento;
    private $data;
    private $hora;
    private $idPaciente;
    private $idMedico;

    public function jsonSerialize(): array {
        return get_object_vars($this);
    }

    public function getIdAgendamento() {
        return $this->idAgendamento;
    }

    public function getData() {
        return $this->data;
    }

    public function getHora() {
        return $this->hora;
    }

    public function getIdPaciente() {
        return $this->idPaciente;
    }

    public function getIdMedico() {
        return $this->idMedico;
    }
}