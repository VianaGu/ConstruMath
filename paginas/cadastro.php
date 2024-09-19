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
    <link rel="stylesheet" href="css/NavBar.css">
</head>

<body>
    <!-- Navigation bar  -->
    <header>
        <nav>
			<!-- logo -->
            <div class="ajustaLogo">
                <img src="img\logo.jpg" alt="Logo" class="logoImg">
                <a class="logo" href="#">ConstruMath</a>
            </div>
			<!-- fim logo -->
        </nav>
    </header>
    <!-- End navigation bar -->
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
                                    <input id ="email" name="email" autocomplete="off" type="e-mail" class="input is-large" placeholder="Seu melhor e-mail" autofocus="">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input id="usuario" name="usuario" autocomplete="off" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input id="senha" name="senha" class="input is-large" type="password" placeholder="Sua senha">
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
    <script>
    // Função para lidar com a tecla Enter
    function handleEnterKeyPress(event) {
        // Verifica se a tecla pressionada é Enter
        if (event.keyCode === 13) {
            // Previne o comportamento padrão do formulário (submit)
            event.preventDefault();

            // Obtém o ID do elemento atual (campo focado)
            var currentElementId = event.target.id;

            // Verifica qual campo está focado atualmente e move para o próximo
            if (currentElementId === "email") {
                document.getElementById("usuario").focus(); // Corrigido aqui
            } else if (currentElementId === "usuario") {
                document.getElementById("senha").focus(); // Move para o campo de senha
            } else if (currentElementId === "senha") {
                // Se o campo de senha está focado, submete o formulário
                event.target.closest("form").submit();
            }
        }
    }

    // Adiciona um listener para o evento keydown nos campos de entrada
    document.getElementById("email").addEventListener("keydown", handleEnterKeyPress); // Corrigido aqui
    document.getElementById("usuario").addEventListener("keydown", handleEnterKeyPress);
    document.getElementById("senha").addEventListener("keydown", handleEnterKeyPress);
</script>

</body>

</html>