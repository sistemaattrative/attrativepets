<?php
session_start();
include("conexao.php");

$id =           mysqli_real_escape_string($mysqli, trim($_POST['id']));
$plano =         mysqli_real_escape_string($mysqli, trim($_POST['plano']));
$descritivo =    mysqli_real_escape_string($mysqli, trim($_POST['descritivo']));
$valor =        mysqli_real_escape_string($mysqli, trim($_POST['valor']));

$sql = "INSERT INTO attr_planos (id, plano, descritivo, valor) VALUES ('$id', '$plano', '$descritivo', '$valor')";
$cadastrar = $mysqli->query($sql) or die($mysqli->error);

$mysqli->close();

header("Location:/login_system/pets_system/planos_lista.php");
exit;
?>