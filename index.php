<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Pagina inicial - Projeto Cadastro IFSP</h3>
    <?php
    if(!empty($_SESSION['login'])){
    echo "<h4>Ola ".$_SESSION['login']['nome_usuario']."</h4>";
    echo "<a href='logout.php'>Sair</a>";   
    }
    ?>
    <hr>
    <ul>
        <li><a href="login.html">Login</a></li>
        <li><a href="cadastro_usuario.html">Cadastrar</a></li>
        <li><a href="listar_usuarios.php">Listar</a></li>
    </ul>
</body>
</html>