<?php
session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title">Cadastro</h3>
                    <?php 
                        if(isset($_SESSION['ja_cadastro'])):
                    ?>
                    <div class="notification is-danger">
                      <p>Esse Usuário já existe.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['ja_cadastro']);
                    ?>
                    <?php 
                        if(isset($_SESSION['emailInvalido'])):
                    ?>
                    <div class="notification is-danger">
                      <p>E-mail Inválido.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['ja_cadastro']);
                    ?>
                    <?php 
                        if(isset($_SESSION['cadastrado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>Usuário cadastrado com sucesso.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['cadastrado']);
                    ?>
                    <div class="box">
                        <form action="cadastrar.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="email" autocomplete="off" type="e-mail" class="input is-large" placeholder="Seu melhor e-mail" autofocus="">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" autocomplete="off" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                        </form>
                    </div>
                    <h1 class="title"><a href="index.php">Login</a></h1>
                </div>
            </div>
        </div>
    </section>
</body>

</html>