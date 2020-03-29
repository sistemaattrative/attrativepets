<?php
session_start();
include("conexao.php");

$consulta_plataforma = "SELECT * FROM attr_plataforma ORDER BY id DESC LIMIT 1";
$con_plataforma = $mysqli->query($consulta_plataforma) or die($mysqli->error);
$dado_plataforma = $con_plataforma->fetch_array();
$id_plataforma = $dado_plataforma["id"];
$id_plataforma = $id_plataforma + 1;


$nome_plataforma =      mysqli_real_escape_string($mysqli, trim($_POST['nome_plataforma']));
$cnpj =                 mysqli_real_escape_string($mysqli, trim($_POST['cnpj']));
$repasse_adesao =       mysqli_real_escape_string($mysqli, trim($_POST['repasse_adesao']));
$senha =                mysqli_real_escape_string($mysqli, trim($_POST['senha']));
$senhaCriptografada =   md5($senha);

$sql = "INSERT INTO attr_plataforma (id, nome_plataforma, cnpj, repasse_adesao, senha) VALUES ('$id_plataforma', '$nome_plataforma', '$cnpj', '$repasse_adesao', '$senhaCriptografada')";
$cadastrar = $mysqli->query($sql) or die($mysqli->error);

$mysqli->close();

header("Location:/login_system/pets_system/plataformas_lista.php");
exit;
?>