<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('conexao.php');
    $sql = "SELECT * FROM usuario";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result); 
    ?>
    <h1>Consulta de usuario</h1>
    <table align="center" border="1" width="500">
        <tr>
            <th>Codigo</th>
            <th>Fotos</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
        </tr>

        <?php
        do{
        if($row)
        {
        echo"<tr>";
        echo"<td>". $row['id_usuario'] ."</td>";
        if($row['foto'] == "")
        echo "<td></td>";
        else
        echo "<td><img src=". $row['foto']. " width='90' height='100'/></td>";
        echo"<td>". $row['nome_usuario'] ."</td>";
        echo"<td>". $row['email_usuario'] ."</td>";
        echo"<td>". $row['fone_usuario'] ."</td>";
        echo "<td><a href='altera_usuario.php?id_usuario=" .$row['id_usuario']."'>alterar</a></td>";
        echo "<td><a href='exclui_usuario.php?id_usuario=" .$row['id_usuario']."'>excluir</a></td>";
        echo"</tr>";
        }
    }
        while($row = mysqli_fetch_array($result))
         
        ?>
    </table>
</body>
</html>