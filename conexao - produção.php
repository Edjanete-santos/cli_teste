<?php
     $BDSERVIDOR = '127.0.0.1';
    $BDUSUARIO = 'root';
    $BDSENHA = '';
    $BDBANCO = 'clinicas';

    $conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

    if (mysqli_connect_errno($conexao)) {
        echo "Problemas para conectar no banco de dados. Se o problema persistir, pedimos desculpas e, por favor, envie um e-mail para suporte@sistemaslight.com.br!";
        die();
    }

    $resultado=mysqli_query($conexao,"SET NAMES 'utf8'");
    $resultado=mysqli_query($conexao,'SET character_set_connection=utf8');
    $resultado=mysqli_query($conexao,'SET character_set_client=utf8');
    $resultado=mysqli_query($conexao,'SET character_set_results=utf8');
?>