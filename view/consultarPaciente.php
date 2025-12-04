<?php

require_once __DIR__ . "/../control/consultarPacienteControl.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Consultar Paciente</title>
<link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

<br><br>

<nav>
    <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="cadastrarPaciente.php">Cadastrar Paciente</a></li>
        <li><a href="consultarPaciente.php">Consultar Paciente</a></li>
    </ul>
</nav>

<h2>Consultar Paciente</h2>

<form method="POST" action="">
    <input type="text" name="buscar" placeholder="Buscar por Nome ou CPF">
    <input type="submit" value="Pesquisar">
    <br><br>
</form>

<table border="1" cellpadding="8">
<tr>
    <th>CPF</th>
    <th>Nome</th>
    <th>Endereço</th>
    <th>Telefone</th>
    <th>Email</th>
    <th>Sexo</th>
    <th>Ações</th>
</tr>

<?php if (isset($lista) && is_array($lista)): 
    foreach ($lista as $p): ?>
<tr>
    <td><?= $p["cpf"] ?></td>
    <td><?= $p["nome"] ?></td>
    <td><?= $p["endereco"] ?></td>
    <td><?= $p["telefone"] ?></td>
    <td><?= $p["email"] ?></td>
    <td><?= $p["sexo"] ?></td>
    <td>
        <a href="alterarPaciente.php?cpf=<?= $p["cpf"] ?>">Editar</a> |
        <a href="../control/excluirPacienteControl.php?cpf=<?= $p["cpf"] ?>">Excluir</a>
    </td>
</tr>
<?php endforeach;
endif;
?>

</table>

</body>
</html>