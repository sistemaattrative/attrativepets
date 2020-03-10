<?php
session_start();
include("conexao.php");

$id =           mysqli_real_escape_string($mysqli, trim($_POST['id']));
$nome =         mysqli_real_escape_string($mysqli, trim($_POST['nome']));
$email =        mysqli_real_escape_string($mysqli, trim($_POST['email']));
$cpf =          mysqli_real_escape_string($mysqli, trim(($_POST['cpf'])));

$sql = "INSERT INTO attr_cliente (id, nome, email, cpf) VALUES ('$id', '$nome', '$email', '$cpf')";
$cadastrar = $mysqli->query($sql) or die($mysqli->error);

$mysqli->close();

header("Location:/login_system/pets_system/clientes_lista.php");
exit;
?>