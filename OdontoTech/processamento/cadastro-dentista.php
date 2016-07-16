<?php
    session_start();
    include_once("../seguranca.php");
    include_once("../conexao.php");
    $nome = $_POST["nome"];
    $cro = $_POST["cro"];
    $especializacao = $_POST["especializacao"];
    $sexo = $_POST["sexo"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $telefone = $_POST["telefone"];
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $dicasenha = $_POST["dicasenha"];
    $endereco = $_POST["endereco"];
    $nivelacesso = $_POST["nivelacesso"];
    
    $query1 = mysql_query("INSERT INTO usuarios (nome, sexo, login, senha, telefone, cpf, email, dicaSenha, endereco, nivel_acesso_id VALUES ('$nome', '$sexo', '$login', '$senha', '$telefone', '$cpf', '$email', '$dicasenha', '$endereco', '$nivelacesso')");
    
    $id = mysql_insert_id();
    
    $query2 = mysql_query("INSERT INTO dentista (cro, especializacao) VALUES ('$cro', '$especializacao')");

    if(mysql_affected_rows() != 0){
        header("Location: ../buscar-dentista.php");
    }

?>
