<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Paciente</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

<nav>
    <ul>
        <li><a href="../index.php">Home</a></li>
        <li><a href="cadastrarPaciente.php">Cadastrar Paciente</a></li>
        <li><a href="consultarPaciente.php">Consultar Paciente</a></li>
    </ul>
</nav>

<h1>Cadastrar Paciente</h1>

<?php if (isset($_GET['erro']) && $_GET['erro'] == 'cpf'): ?>
    <p>
        Erro: Esse CPF já está cadastrado!
    </p>
<?php endif; ?>               

<form method="POST" action="../control/cadastrarPacienteControl.php">

    <label>Cpf do Paciente:</label>
    <input type="number" name="cpf"/>
    <br><br>

    <label>Nome do Paciente:</label>
    <input type="text" name="nome"/>
    <br><br>

    <label>Endereço do Paciente:</label>
    <input type="text" name="endereco"/>
    <br><br>

    <label>Telefone do Paciente:</label>
    <input type="number" name="telefone"/>
    <br><br>

    <label>Email do Paciente:</label>
    <input type="email" name="email"/>
    <br><br>

    <label>Sexo do Paciente:</label>
    <select name="sexo">
        <option value="M">Masculino</option>
        <option value="F">Feminino</option>
    </select>
    <br><br>

    <input type="submit" value="Cadastrar" name="btnCadastrar"/>
</form>

</body>
</html>