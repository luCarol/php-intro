<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inscrição</title>
    <meta name="author" content="">
    <meta name="description" content="">
</head>
<body>

    <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

    <form action="script.php" method="POST">
        <?php
            $mensagemDeSucesso = isset($_SESSION['mensagem de sucesso']) ? $_SESSION['mensagem de sucesso'] : '';
            if(!empty($mensagemDeSucesso)) {
                echo $mensagemDeSucesso;
            }
            $mensagemDeErro = isset($_SESSION['mensagem de erro']) ? $_SESSION['mensagem de erro'] : '';
            if(!empty($mensagemDeErro)) {
                echo $mensagemDeErro;
            }
        ?>
        <p>Your name: <input type="text" name="nome" /></p>
        <p>Your age: <input type="text" name="idade" /></p>
        <p><input type="submit" value="Enviar dados do competidor"/></p>
    </form>
    
</body>
</html>