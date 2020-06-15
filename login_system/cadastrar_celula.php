<?php
session_start();
include("conexao.php");

$consulta_celula = "SELECT * FROM attr_celula ORDER BY id DESC LIMIT 1 ";
$con_celula = $mysqli->query($consulta_celula) or die($mysqli->error);
$dado_celula = $con_celula->fetch_array();
$id_celula = $dado_celula["id"];
$id_celula = $id_celula + 1;

$nome =         mysqli_real_escape_string($mysqli, trim($_POST['nome']));
$valor =        mysqli_real_escape_string($mysqli, trim($_POST['valor']));

$sql = "INSERT INTO attr_celula (id, celula, valor) VALUES ('$id_celula', '$nome', '$valor')";
$cadastrar = $mysqli->query($sql) or die($mysqli->error);

$mysqli->close();

header("Location:/login_system/pets_system/celulas_lista.php");
exit;
?>