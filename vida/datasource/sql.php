<?php

// Usuarios
define("LOGIN", "SELECT idUsuario, senha, chave FROM usuario WHERE email = ?;");
define("SELECT_USUARIO_POR_CHAVE", "SELECT idUsuario FROM usuario WHERE chave = ?;");
define("SELECT_USUARIO_MEDICO", "SELECT * FROM usuario WHERE tipoUsuario = 'medico';");
define("INSERT_USUARIO", "INSERT INTO usuario (nome, cpf, email, senha, dataNascimento, telefone, especialidade, tipoUsuario, estado, cidade, bairro, rua, numero, chave) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
define("UPDATE_USUARIO", "UPDATE usuario SET nome=?, cpf=?, email=?, senha=?, dataNascimento=?, telefone=?, especialidade=?, tipoUsuario=?, estado=?, cidade=?, bairro=?, rua=?, numero=? WHERE idUsuario=?;");
define("DELETE_USUARIO", "DELETE FROM usuario WHERE idUsuario=?;");

// Agendamentos
define("SELECT_AGENDAMENTO", "SELECT * FROM agendamento WHERE idPaciente = ?;");
define("INSERT_AGENDAMENTO", "INSERT INTO agendamento (data, hora, idPaciente, idMedico) VALUES (?, ?, ?, ?);");
define("UPDATE_AGENDAMENTO", "UPDATE agendamento SET data=?, hora=?, idPaciente=?, idMedico=? WHERE idAgendamento=?;");
define("DELETE_AGENDAMENTO", "DELETE FROM agendamento WHERE idAgendamento=?");

// Indicadores
define("SELECT_INDICADOR", "SELECT * FROM indicador WHERE idPaciente=?;");
define("INSERT_INDICADOR", "INSERT INTO indicador (data, tipo, valor, idPaciente) VALUE (?, ?, ?, ?);");
define("UPDATE_INDICADOR", "UPDATE indicador SET data=?, tipo=?, valor=?, idPaciente=? WHERE idIndicador=?;");
define("DELETE_INDICADOR", "DELETE FROM indicador WHERE idIndicador=?");