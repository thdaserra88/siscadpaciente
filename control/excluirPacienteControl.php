<?php

require_once "../model/DAO/pacienteDAO.php";
require_once "../model/DAO/conexao.php";

if (!empty($_GET['cpf'])) {

    $cpf = $_GET['cpf'];

    $pacienteDAO = new PacienteDAO($conexao);
    $pacienteDAO->excluirPaciente($cpf);
}

header("Location: ../view/consultarPaciente.php");
exit;