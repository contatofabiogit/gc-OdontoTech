<?php
    session_start();
    include_once("seguranca.php");
    include_once("conexao.php");
    include_once("valida-cpf.php");
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
            $(document).ready(function () {
                jQuery(function ($) {
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
            <form method="POST" action="processamento/cadastro-dentista.php">
                <div class="row form-group text-left">
                    <div class="form-group text-left col-md-6">
                        <label>Nome Completo</label>
                        <br>
                        <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome Completo" /> </div>
                    <div class="form-group text-left col-md-3">
                        <label name="cro">CRO</label>
                        <br>
                        <input type="text" name="cro" class="form-control" id="cro" placeholder="CRO" /> </div>
                    <div class="form-group text-left col-md-3">
                        <label name="especializacao">Especialização</label>
                        <br>
                        <input type="text" class="form-control" name="especializacao" id="especializacao" placeholder="Especialização" /> </div>
                    <div class="form-group text-left col-md-2">
                        <label name="text">Sexo</label>
                        <br>
                        <select class="form-control" id="sexo" name="sexo">
                            <option>Selecione</option>
                            <option value="M">M</option>
                            <option value="F">F</option>
                        </select>
                    </div>
                    <div class="form-group text-left col-md-3">
                        <label name="login">Login</label>
                        <br>
                        <input type="text" class="form-control" name="login" id="login" placeholder="Login" /> </div>
                    <div class="form-group text-left col-md-3">
                        <label name="senha">Senha</label>
                        <br>
                        <input type="text" class="form-control" name="senha" id="senha" placeholder="Senha" /> </div>
                    <div class="form-group text-left col-md-4">
                        <label name="telefone">Telefone</label>
                        <br>
                        <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone" /> </div>
                    <div class="form-group text-left col-md-3">
                        <label name="cpf">CPF</label>
                        <br>
                        <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF" /> </div>
                        <?php
                            require_once('valida-cpf.php');
                        ?>
                    <div class="form-group text-left col-md-6">
                        <label name="email">E-mail</label>
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
                
                            echo "<select class='form-control' data-size='5' id='nivelacesso' name='nivelacesso'>";
                   
                            $query = "SELECT * FROM nivel_acesso WHERE id='1'";
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
                        <a href="main-admin.php" class="hvr-grow-shadow"><img src="images/botao-home-render.png" class="home">
                            <br>
                            <label name="home">Home</label>
                        </a>
                    </div>
                    <div class="salvarPrincipal col-md-6 text-center">
                        <div class="btn col-md-2">
                            <button type="submit" class="btn">
                                <a href="processamento/cadastro-dentista.php" type="submit" class="hvr-float-shadow"><img src="images/botao-salvar-render.png" class="salvar">
                                    <br>
                                    <label name="salvar">Salvar</label>
                                </a>
                            </button>
                        </div>
                        
                        <div class="btn col-md-2">
                           <button class="btn">
                            <a href="#" type="submit" class="hvr-float-shadow" data-toggle="modal" data-target="#Modal-Usuario"><img src="images/botao-cancelar-render.png" class="cancelar">
                                <br>
                                <label name="cancelar">Cancelar</label>
                            </a>
                            </button>
                            
                            <!-- Início Modal Usuário-->
                            <div class="modal fade" id="Modal-Usuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title alert alert-danger" role="alert" id="myModalLabel"><strong>ATENÇÃO!!!</strong></h4> </div>
                                        <div class="modal-body">
                                            <div class="modal-container">
                                                <div class="row row-centered">
                                                    <div class="alert alert-info" role="alert"><strong>Deseja mesmo sair sem salvar os dados?</strong></div>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Sim</button>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Modal Usuário-->
                            
                        </div>
                        
                        <div class="btn col-md-2">
                            <button type="submit" class="btn">
                                <a href="#" class="hvr-float-shadow"><img src="images/botao-limpar-render.png" class="limpar">
                                    <br>
                                    <label name="limpar">Limpar</label>
                                </a>
                            </button>
                        </div>
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