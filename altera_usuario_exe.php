<?php
include('conexao.php');
$id_usuario = $_POST['id_usuario'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$fone = $_POST['fone'];
$senha = $_POST['senha'];

echo "<h1>Alteração de dados</h1>";
echo "<p>Usuario: $nome</p>";
$sql = "update usuario set nome_usuario = '$nome', email_usuario = '$email', fone_usuario = '$fone', senha = '$senha', foto = '$nome_foto' where id_usuario = '$id_usuario'";

echo $sql;
$result = mysqli_query($con, $sql);
if($result)
echo "Dados alterados com sucesso<br>";
else
echo "Erro ao alterar dados: " . mysqli_error($con) . "!";

?>
<a href="index.php">Voltar</a>