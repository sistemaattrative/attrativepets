<?php
session_start();
include("conexao.php");

$consulta_plano = "SELECT * FROM attr_planos ORDER BY id DESC LIMIT 1 ";
$con_plano = $mysqli->query($consulta_plano) or die($mysqli->error);
$dado_plano = $con_plano->fetch_array();
$id_plano = $dado_plano["id"];
$id_plano = $id_plano + 1;

$plano =         mysqli_real_escape_string($mysqli, trim($_POST['plano']));
$descritivo =    mysqli_real_escape_string($mysqli, trim($_POST['descritivo']));
$valor =        mysqli_real_escape_string($mysqli, trim($_POST['valor']));

$sql = "INSERT INTO attr_planos (id, plano, descritivo, valor) VALUES ('$id_plano', '$plano', '$descritivo', '$valor')";
$cadastrar = $mysqli->query($sql) or die($mysqli->error);

$mysqli->close();

header("Location:/login_system/pets_system/planos_lista.php");
exit;
?>