<?php
session_start();
include("conexao.php");

$consulta = "SELECT * FROM attr_cliente ORDER BY ID DESC LIMIT 1 ";
$con = $mysqli->query($consulta) or die($mysqli->error);
$dado = $con->fetch_array();
$id = $dado["id"];
$id = $id + 1;


$nome =             mysqli_real_escape_string($mysqli, trim($_POST['nome']));
$email =            mysqli_real_escape_string($mysqli, trim($_POST['email']));
$cpf =              mysqli_real_escape_string($mysqli, trim(($_POST['cpf'])));
$rg =               mysqli_real_escape_string($mysqli, trim($_POST['rg']));
$orgao_emissor =    mysqli_real_escape_string($mysqli, trim($_POST['orgao_emissor']));
$data_expedicao =   mysqli_real_escape_string($mysqli, trim($_POST['data_expedicao']));
$data_nascimento =  mysqli_real_escape_string($mysqli, trim($_POST['data_nascimento']));
$estado_civil =     mysqli_real_escape_string($mysqli, trim($_POST['estado_civil']));
$genero =           mysqli_real_escape_string($mysqli, trim($_POST['genero']));
$telefone1 =        mysqli_real_escape_string($mysqli, trim($_POST['telefone1']));
$telefone2 =        mysqli_real_escape_string($mysqli, trim($_POST['telefone2']));
$nome_mae =         mysqli_real_escape_string($mysqli, trim($_POST['nome_mae']));
$nome_pai =         mysqli_real_escape_string($mysqli, trim($_POST['nome_pai']));
$cep =              mysqli_real_escape_string($mysqli, trim($_POST['cep']));
$endereco =         mysqli_real_escape_string($mysqli, trim($_POST['endereco']));
$bairro =           mysqli_real_escape_string($mysqli, trim($_POST['bairro']));
$numero =           mysqli_real_escape_string($mysqli, trim($_POST['numero']));
$complemento =      mysqli_real_escape_string($mysqli, trim($_POST['complemento']));
$estado =           mysqli_real_escape_string($mysqli, trim($_POST['estado']));
$cidade =           mysqli_real_escape_string($mysqli, trim($_POST['cidade']));
$profissão =        mysqli_real_escape_string($mysqli, trim($_POST['profissão']));
$renda =            mysqli_real_escape_string($mysqli, trim($_POST['renda']));
$pessoa_exposta =   mysqli_real_escape_string($mysqli, trim($_POST['pessoa_exposta']));
$cartao =           mysqli_real_escape_string($mysqli, trim($_POST['cartao']));

$sql = "INSERT INTO attr_cliente (id, nome, email, cpf, rg, rg_orgao_emissor, rg_data_expedicao, data_nascimento, estado_civil, genero, telefone1, telefone2, nome_mae, nome_pai, cep, endereco, bairro, numero, complemento, estado, cidade, profissao, renda, pessoa_exposta, cartao) VALUES ('$id', '$nome', '$email', '$cpf', '$rg', '$orgao_emissor', '$data_expedicao', '$data_nascimento', '$estado_civil', '$genero', '$telefone1', '$telefone2', '$nome_mae', '$nome_pai', '$cep', '$endereco', '$bairro', '$numero', '$complemento', '$estado', '$cidade', '$profissão', '$renda', '$pessoa_exposta', '$cartao')";
$cadastrar = $mysqli->query($sql) or die($mysqli->error);

$mysqli->close();

header("Location:/login_system/pets_system/clientes_lista.php");
exit;
?>