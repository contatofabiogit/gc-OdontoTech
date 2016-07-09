<?php
    session_start();
    $usuariot = $_POST['usuario'];
    $senhat = $_POST['senha'];
    include_once ("conexao.php");
    $result = mysql_query("SELECT * FROM usuarios WHERE login = '$usuariot' AND senha = '$senhat' LIMIT 1");
    $resultado = mysql_fetch_assoc($result);

    echo "Usuário: ".$resultado['nome'];

    if(empty($resultado)){
        //Mensagem de erro
        $_SESSION['loginErro'] = "Usuário ou Senha Inválido";
        
        //Manda o usuário para a tela de login
        header("Location: login.php");
    }else{
        
        //Define os valores atribuídos na sessão do usuário
        $_SESSION['usuarioId'] = $resultado['id'];
        $_SESSION['usuarioNome'] = $resultado['nome'];
        $_SESSION['usuarioNivelAcesso'] = $resultado['nivel_acesso_id'];
        $_SESSION['usuarioLogin'] = $resultado['login'];
        $_SESSION['usuarioSenha'] = $resultado['senha'];
        
        if($_SESSION['usuarioNivelAcesso'] == 1){
            //Manda o usuário para a tela de login
            header("Location: main-admin.php");    
        }else if ($_SESSION['usuarioNivelAcesso'] == 2){
            //Manda o usuário para a tela de usuario
            header("Location: main-usuario.php");
        } else if ($_SESSION['usuarioNivelAcesso'] == 3){
            //Manda o usuário para a tela de usuario
            header("Location: main-assistente.php");
        }else{
            $_SESSION['loginErro'];
        }
        
    }
?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8"> </head>

    <body> </body>

    </html>