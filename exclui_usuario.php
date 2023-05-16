<?php
include('conexao.php');
$id_usuario = $_GET['id_usuario'];
$sql = "delete from usuario where id_usuario = '$id_usuario'";
$result = mysqli_query($con, $sql);
if($result){
echo "<script>alert('usuario excluido com  sucesso!');";
echo "location.href='listar_usuarios.php';</script>";
}
else
{
    echo "<script>alert('Erro ao excluir usuario!');";
    echo "location.href='listar_usuarios.php';</script>";
}
?>

?>