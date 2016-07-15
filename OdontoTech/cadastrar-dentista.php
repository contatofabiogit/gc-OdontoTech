<?php
    session_start();
    include_once("seguranca.php");
    include_once("conexao.php");
?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="images/logo-logomarca-render.png">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>OdontoTech - Home</title>
        <!-- Location-->
        <link rel="stylesheet" href="css/main-admin.css">
        <link rel="stylesheet" href="css/main-hover.css">
        <link rel="stylesheet" href="css/cadastrar-dentista.css">
        <!-- MDL Google -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Bootstrap -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

        <!-- Máscara em campos -->
        <script type="text/javascript" src="js/jquery.maskedinput.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                jQuery(function($) {
                    $("#cep").mask("99.999-99");
                    $("#cro").mask("99999");
                    $("#dtnascimento").mask("99/99/9999", {
                        placeholder: "dd/mm/aaaa"
                    });
                    $("#cpf").mask("999.999.999-99");
                    $("#telefone").mask("(99) 9.9999-9999");

                });
            });

        </script>
    </head>

    <body>
        <div class="container">
            <br>
            <div class="row cabecalhoP">
                <header>Sistema Odontológico - Cadastrar Dentista</header>
                <!-- Expandable Textfield -->
                <div class="topo">
                    <!-- Left aligned menu below button -->
                    <button id="demo-menu-lower-left" class="mdl-button mdl-js-button mdl-button--icon"> <i class="material-icons">more_vert</i> </button>
                    <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-left">
                        <li class="mdl-menu__item mdl-menu__item--full-bleed-divider">Perfil</li>
                        <a href="sair.php">
                            <li class="mdl-menu__item">Sair</li>
                        </a>
                    </ul>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                        <label class="mdl-button mdl-js-button mdl-button--icon" for="sample6"> <i class="material-icons">search</i> </label>
                        <div class="mdl-textfield__expandable-holder">
                            <input class="mdl-textfield__input" type="text" id="sample6">
                            <a href="sair.php">
                                <label class="mdl-textfield__label" for="sample-expandable">Sair</label>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <form>
                <div class="row form-group text-left">
                    <div class="form-group text-left col-md-6">
                        <label name="nome">Nome Completo</label>
                        <br>
                        <input type="text" name="nome" class="form-control" id="inputEmail3" placeholder="Nome Completo" /> </div>

                    <div class="form-group text-left col-md-3">
                        <label name="cro">CRO</label>
                        <br>
                        <input type="text" name="cro" class="form-control" id="cro" placeholder="CRO" /> </div>

                    <div class="form-group text-left col-md-3">
                        <label name="especializacao">Especialização</label>
                        <br>
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Especialização" /> </div>

                    <div class="form-group text-left col-md-4">
                        <label name="text">Sexo</label>
                        <br>
                        <select class="form-control" id="">
                            <option>Selecione</option>
                            <option>M</option>
                            <option>F</option>
                        </select>
                    </div>

                    <div class="form-group text-left col-md-4">
                        <label name="login">Login</label>
                        <br>
                        <input type="text" class="form-control" name="login" id="login" placeholder="Login" /> </div>

                    <div class="form-group text-left col-md-4">
                        <label name="senha">Senha</label>
                        <br>
                        <input type="text" class="form-control" name="senha" id="senha" placeholder="Senha" /> </div>

                    <div class="form-group text-left col-md-4">
                        <label name="telefone">Telefone</label>
                        <br>
                        <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone" /> </div>

                    <div class="form-group text-left col-md-2">
                        <label name="cpf">CPF</label>
                        <br>
                        <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF" /> </div>

                    <div class="form-group text-left col-md-6">
                        <label name="endereco">E-mail</label>
                        <br>
                        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" /> </div>

                    <div class="form-group text-left col-md-3">
                        <label name="dicasenha">Dica de Senha</label>
                        <br>
                        <input type="text" class="form-control" id="dicasenha" name="dicasenha" placeholder="Dica de Senha" /> </div>

                    <div class="form-group text-left col-md-6">
                        <label name="endereco">Endereço</label>
                        <br>
                        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço" /> </div>

                    <div class="form-group text-left col-md-3">
                        <label name="nivelacesso">Nível de Acesso</label>
                        <br>
                        <?php
                            // arquivo que contera a conexao com o banco	
                            require_once('conexao.php');
                
                            echo "<select class='form-control' data-size='5' id='estado' name='estado'>";
                   
                            $query = "SELECT * FROM nivel_acesso ORDER BY id";
                            $result = mysql_query($query);
                            while ($rows = mysql_fetch_array($result)){                       
                               echo "<option value='$rows[id]'";
                               echo ">$rows[id]- $rows[nome]";
                            }
                            echo "</select>";
                        ?>
                    </div>
                </div>
                
                <div class="row">
                    <div class="homePrincipal col-md-4 text-center ">
                        <a href="#" class="hvr-grow-shadow"><img src="images/botao-home-render.png" class="home">
                        <br>
                        <label name="home">Home</label>
                        </a>
                    </div>
                    <div class="salvarPrincipal col-md-4 text-center">
                        <a href="#" class="hvr-float-shadow"><img src="images/botao-salvar-render.png" class="salvar">
                        <br>
                        <label name="salvar">Salvar</label>
                        </a>
                        <a href="#" class="hvr-float-shadow"><img src="images/botao-cancelar-render.png" class="cancelar">
                        <br>
                        <label name="cancelar">Cancelar</label>
                        </a>
                        <a href="#" class="hvr-float-shadow"><img src="images/botao-limpar-render.png" class="limpar">
                        <br>
                        <label name="limpar" >Limpar</label>
                        </a>
                    </div>
                </div>
                
            </form>
            <br>
            <div class="row logoCanto row-centered"> <img src="images/logo-render.png" alt="logo"> </div>
            <br>
            <br>
            <div class="rodape text-center"> © Copyright 2016-2020 <a href="#">OdontoTech</a> - Versão 1.0.0.0 </div>
        </div>
    </body>

    </html>
