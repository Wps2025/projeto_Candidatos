<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel = "stylesheet" href="./css/404.css">
    </head>
    <body>
        <div>
            <?php
                echo "Não será possível acessar o sistema! <br>Cadastre-se no formulário ou acesse o login novamente!<br><br>Não tem uma conta?<br><br>";
                echo "<a href='/projeto_Candidatos/structure/formulario'>Cadastre-se</a><br>";
                echo "<br><a href='/projeto_Candidatos/structure/login'>Login</a>";
                exit();
            ?>
        </div>    
    </body>
</html>
