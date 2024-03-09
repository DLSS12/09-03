<?php

if(isset($_POST['submit']))
{
//       print_r('Nome: ' . $_POST['nome']);
//        print_r('<br>');
//        print_r('Telefone: ' . $_POST['tel']);


include_once('config.php');

    $nome = $_POST['nome'];
    $tel = $_POST['tel'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,tel) VALUES ('$nome','$tel')");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Merendeira</title>
    <link rel="stylesheet" href="cadmeren.css">
</head>
<body>
    <form action="cadmeren.php" method="POST">
        <fieldset>
            <h1>Cadastro</h1>
            <!-- Seus elementos de formulário aqui -->
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" size="40px">
            <br><br>
            <label for="telefone">Telefo:</label>
            <input type="tel" id="tel" name="tel" size="40px">
            <br><br>
        <center> <input type="submit" name="submit" id="submit"></center> 
        </fieldset>
    </form>
</body>
</html>
