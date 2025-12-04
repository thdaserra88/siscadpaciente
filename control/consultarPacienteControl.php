<?php

require_once "../model/DAO/pacienteDAO.php";
require_once "../model/DAO/conexao.php";

$dao = new PacienteDAO($conexao);

if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST["buscar"])) {
    $lista = $dao->buscar($_POST["buscar"]);
} else {
    $lista = $dao->listarPacientes();
}

?>