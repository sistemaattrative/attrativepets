<?php
session_start();
include("conexao.php");

$id =           mysqli_real_escape_string($mysqli, trim($_POST['usu_id']));
$tipo_acesso =  mysqli_real_escape_string($mysqli, trim($_POST['usu_tip_acs']));
$nome =         mysqli_real_escape_string($mysqli, trim($_POST['usu_nome']));
$email =        mysqli_real_escape_string($mysqli, trim($_POST['usu_email']));
$senha =        mysqli_real_escape_string($mysqli, trim(($_POST['usu_senha'])));
$cpf =          mysqli_real_escape_string($mysqli, trim(($_POST['usu_cpf'])));

$sql = "INSERT INTO attr_usuario (usu_id, usu_tip_acs, usu_nome, usu_email, usu_senha, usu_cpf) VALUES ('$id', '$tipo_acesso', '$nome', '$email', '$senha', '$cpf')";
$cadastrar = $mysqli->query($sql) or die($mysqli->error);

$mysqli->close();

header("Location:/login_system/pets_system/vendedores_lista.php");
exit;
?>