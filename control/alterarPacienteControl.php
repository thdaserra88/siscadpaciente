<?php

require_once "../model/DTO/pacienteDTO.php";
require_once "../model/DAO/pacienteDAO.php";
require_once "../model/DAO/conexao.php";

if (!empty($_POST['cpfAlterar'])) {

    $cpf = $_POST['cpfAlterar'];

    $pacienteDTO = new pacienteDTO();
    $pacienteDTO->__setCpf($_POST['cpf']);
    $pacienteDTO->__setNome($_POST['nome']);
    $pacienteDTO->__setEndereco($_POST['endereco']);
    $pacienteDTO->__setTelefone($_POST['telefone']);
    $pacienteDTO->__setEmail($_POST['email']);
    $pacienteDTO->__setSexo($_POST['sexo']);

    $pacienteDAO = new PacienteDAO($conexao);
    $pacienteDAO->alterarPaciente($pacienteDTO, $cpf);
}

header("Location: ../view/consultarPaciente.php");
exit;