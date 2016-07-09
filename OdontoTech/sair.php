<?php
    session_start();
    session_destroy();

    //Remover todos os dados
        unset (
        $_SESSION['usuarioId'],
        $_SESSION['usuarioNome'], 
        $_SESSION['usuarioSexo'], 
        $_SESSION['usuarioLogin'], 
        $_SESSION['usuarioSenha'], 
        $_SESSION['usuarioTelefone'], 
        $_SESSION['usuarioCpf'], 
        $_SESSION['usuarioEmail'], 
        $_SESSION['usuarioDicaSenha'], 
        $_SESSION['usuarioEndereco'], 
        $_SESSION['usuarioNivelAcesso']
        );

    //Redireciona usuário para tela de login
header("Location: login.php");
?>
