<?php
session_start();
include("conexao.php");

$id =               mysqli_real_escape_string($mysqli, trim($_POST['id']));
$nome_plataforma =  mysqli_real_escape_string($mysqli, trim($_POST['nome_plataforma']));
$cnpj =             mysqli_real_escape_string($mysqli, trim($_POST['cnpj']));
$repasse_adesao =   mysqli_real_escape_string($mysqli, trim($_POST['repasse_adesao']));

$sql = "INSERT INTO attr_plataforma (id, nome_plataforma, cnpj, repasse_adesao) VALUES ('$id', '$nome_plataforma', '$cnpj', '$repasse_adesao')";
$cadastrar = $mysqli->query($sql) or die($mysqli->error);

$mysqli->close();

header("Location:/login_system/pets_system/plataformas_lista.php");
exit;
?>