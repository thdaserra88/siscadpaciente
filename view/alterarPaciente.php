<?php
require_once "../model/DAO/pacienteDAO.php";
require_once "../model/DAO/conexao.php";

$dao = new PacienteDAO($conexao);
$p = $dao->consultarCpf($_GET["cpf"]);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Alterar Paciente</title>
<link rel="stylesheet" href="estilo.css">
</head>
<body>

<h2>Alterar Paciente</h2>

<form method="POST" action="../control/alterarPacienteControl.php">

<input type="hidden" name="cpfAlterar" value="<?= $p['cpf'] ?>">

CPF: <input type="text" name="cpf" value="<?= $p['cpf'] ?>" readonly><br><br>

Nome: <input type="text" name="nome" value="<?= $p['nome'] ?>"><br><br>

Endereço: <input type="text" name="endereco" value="<?= $p['endereco'] ?>"><br><br>

Telefone: <input type="text" name="telefone" value="<?= $p['telefone'] ?>"><br><br>

Email: <input type="email" name="email" value="<?= $p['email'] ?>"><br><br>

Sexo:
<select name="sexo">
    <option value="M" <?= $p['sexo'] === 'M' ? 'selected' : '' ?>>Masculino</option>
    <option value="F" <?= $p['sexo'] === 'F' ? 'selected' : '' ?>>Feminino</option>
</select>
<br><br>

<input type="submit" value="Salvar Alterações">

</form>

</body>
</html>