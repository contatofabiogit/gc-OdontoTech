<?php
ob_start();
if (($_SESSION['usuarioId'] == "")||
        ($_SESSION['usuarioNome'] == "") ||
        ($_SESSION['usuarioSexo'] == "") ||
        ($_SESSION['usuarioLogin'] == "") ||
        ($_SESSION['usuarioSenha'] == "") ||
        ($_SESSION['usuarioTelefone'] == "") ||
        ($_SESSION['usuarioCpf'] == "") ||
        ($_SESSION['usuarioEmail'] == "") ||
        ($_SESSION['usuarioDicaSenha'] == "") ||
        ($_SESSION['usuarioEndereco'] == "") ||
        $_SESSION['usuarioNivelAcesso'] == "")
{
    //Mensagem de Erro
    $_SESSION['loginErro'] = "Acesso Negado!";
    
    //Manda o usuário para tela de login
    header ("Location: login.php");
}