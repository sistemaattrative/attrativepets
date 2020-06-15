<?php
session_start();
include("conexao.php");

$consulta_vendedores = "SELECT * FROM attr_usuario ORDER BY usu_id DESC LIMIT 1";
$con_vendedor = $mysqli->query($consulta_vendedores) or die($mysqli->error);
$dado_vendedor = $con_vendedor->fetch_array();
$id_vendedor = $dado_vendedor["usu_id"];
$id_vendedor = $id_vendedor + 1;

$tipo_acesso =          mysqli_real_escape_string($mysqli, trim($_POST['usu_tip_acs']));
$nome =                 mysqli_real_escape_string($mysqli, trim($_POST['usu_nome']));
$email =                mysqli_real_escape_string($mysqli, trim($_POST['usu_email']));
$senha =                mysqli_real_escape_string($mysqli, trim(($_POST['usu_senha'])));
$cpf =                  mysqli_real_escape_string($mysqli, trim(($_POST['usu_cpf'])));
$senhaCriptografada =   md5($senha);

$sql = "INSERT INTO attr_usuario (usu_id, usu_tip_acs, usu_nome, usu_email, usu_senha, usu_cpf) VALUES ('$id_vendedor', '$tipo_acesso', '$nome', '$email', '$senhaCriptografada', '$cpf')";
$cadastrar = $mysqli->query($sql) or die($mysqli->error);

$mysqli->close();

header("Location:/login_system/pets_system/vendedores_lista.php");
exit;
?>