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
        //Manda o usuário para a tela de login
        header("Location: main-admin.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
</head>
<body>
</body>
</html>