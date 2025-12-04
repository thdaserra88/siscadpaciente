<?php
require_once "../model/DTO/pacienteDTO.php";
require_once "../model/DAO/pacienteDAO.php";
require_once "../model/DAO/conexao.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['btnCadastrar'])) {

        $pacienteDTO = new pacienteDTO();
        $pacienteDTO->__setCpf($_POST['cpf'] ?? null);
        $pacienteDTO->__setNome($_POST['nome'] ?? null);
        $pacienteDTO->__setEndereco($_POST['endereco'] ?? null);
        $pacienteDTO->__setTelefone($_POST['telefone'] ?? null);
        $pacienteDTO->__setEmail($_POST['email'] ?? null);
        $pacienteDTO->__setSexo($_POST['sexo'] ?? null);

        $pacienteDAO = new pacienteDAO($conexao);
        $resultado = $pacienteDAO->cadastrarPaciente($pacienteDTO);

        
        if ($resultado === "cpf_existente") {
            header("Location: ../view/cadastrarPaciente.php?erro=cpf");
            exit;
        }

        
        header("Location: ../view/consultarPaciente.php");
        exit;
    }
}
?>
