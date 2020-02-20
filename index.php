<?php
include "Serviços/servicoMensagemSessao.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Formulário de Inscrição</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width-device-width, initial-scale-1">
</head>

<body>

    <p>FORMULÁRIO DE INCRIÇÃO PARA COMPETIDORES</p>

    <form action="script.php" method="post">
        <?php
        $MensagemDeSucesso = obterMensagemSucesso();
        if (!empty($MensagemDeSucesso)) {
            echo $MensagemDeSucesso;
        }
        $MensagemDeErro = obterMensagemErro();
        // Se estiver valor iniciado na Session, atribui valor a variável
        if (!empty($MensagemDeErro)) {
            echo $MensagemDeErro;
        }
        ?>
        <p>Seu nome: <input type="text" name="nome" /></p>
        <p>Sua idade: <input type="text" name="idade" /></p>
        <p><input type="submit" value="Enviar dados do competidor" /></p>
    </form>
</body>

</html>