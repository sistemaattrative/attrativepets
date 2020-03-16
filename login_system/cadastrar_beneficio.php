<?php
session_start();
include("conexao.php");

$id =           mysqli_real_escape_string($mysqli, trim($_POST['ben_id']));
$nome =         mysqli_real_escape_string($mysqli, trim($_POST['ben_nome']));
$descricao =    mysqli_real_escape_string($mysqli, trim($_POST['ben_descricao']));
$valor =        mysqli_real_escape_string($mysqli, trim($_POST['ben_valor']));

$sql = "INSERT INTO attr_beneficios (ben_id, ben_nome, ben_descricao, ben_valor) VALUES ('$id', '$nome', '$descricao', '$valor')";
$cadastrar = $mysqli->query($sql) or die($mysqli->error);

$mysqli->close();

header("Location:/login_system/pets_system/beneficios_lista.php");
exit;
?>