<?php
session_start();
include("conexao.php");

$consulta_beneficio = "SELECT * FROM attr_beneficios ORDER BY ben_id DESC LIMIT 1 ";
$con_beneficio = $mysqli->query($consulta_beneficio) or die($mysqli->error);
$dado_beneficio = $con_beneficio->fetch_array();
$id_beneficio = $dado_beneficio["ben_id"];
$id_beneficio = $id_beneficio + 1;

$nome =         mysqli_real_escape_string($mysqli, trim($_POST['ben_nome']));
$descricao =    mysqli_real_escape_string($mysqli, trim($_POST['ben_descricao']));
$valor =        mysqli_real_escape_string($mysqli, trim($_POST['ben_valor']));

$sql = "INSERT INTO attr_beneficios (ben_id, ben_nome, ben_descricao, ben_valor) VALUES ('$id_beneficio', '$nome', '$descricao', '$valor')";
$cadastrar = $mysqli->query($sql) or die($mysqli->error);

$mysqli->close();

header("Location:/login_system/pets_system/beneficios_lista.php");
exit;
?>