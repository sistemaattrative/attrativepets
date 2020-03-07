<?php
session_start();
include("conexao.php");

$id =           mysqli_real_escape_string($mysqli, trim($_POST['id']));
$nome =         mysqli_real_escape_string($mysqli, trim($_POST['nome']));
$valor =        mysqli_real_escape_string($mysqli, trim($_POST['valor']));

$sql = "INSERT INTO attr_celula (id, celula, valor) VALUES ('$id', '$nome', '$valor')";
$cadastrar = $mysqli->query($sql) or die($mysqli->error);

$mysqli->close();

header("Location:/login_system/pets_system/celulas_lista.php");
exit;
?>