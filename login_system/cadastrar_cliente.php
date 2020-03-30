<?php
session_start();
include("conexao.php");

$consulta_cliente = "SELECT * FROM attr_cliente ORDER BY id DESC LIMIT 1 ";
$con_cliente = $mysqli->query($consulta_cliente) or die($mysqli->error);
$dado_cliente = $con_cliente->fetch_array();
$id_cliente = $dado_cliente["id"];
$id_cliente = $id_cliente + 1;

$consulta_venda = "SELECT * FROM attr_venda ORDER BY id DESC LIMIT 1 ";
$con_venda = $mysqli->query($consulta_venda) or die($mysqli->error);
$dado_venda = $con_venda->fetch_array();
$id_venda = $dado_venda["id"];
$id_venda = $id_venda + 1;

$vendedor =         mysqli_real_escape_string($mysqli, trim($_POST['vendedor']));
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
$senha =            mysqli_real_escape_string($mysqli, trim($_POST['senha']));
$venc_boleto =      $_POST['dataVencimento'];
$prox_vencimento =  $_POST['proximoVencimento'];
$termo =            $_POST['termo'];
$senhaCriptografada =   md5($senha);

if($termo == 'true')
{
    $sql = "INSERT INTO attr_cliente (id, nome, email, cpf, rg, rg_orgao_emissor, rg_data_expedicao, data_nascimento, estado_civil, genero, telefone1, telefone2, nome_mae, nome_pai, cep, endereco, bairro, numero, complemento, estado, cidade, profissao, renda, pessoa_exposta, cartao, termo, senha) VALUES ('$id_cliente', '$nome', '$email', '$cpf', '$rg', '$orgao_emissor', '$data_expedicao', '$data_nascimento', '$estado_civil', '$genero', '$telefone1', '$telefone2', '$nome_mae', '$nome_pai', '$cep', '$endereco', '$bairro', '$numero', '$complemento', '$estado', '$cidade', '$profissão', '$renda', '$pessoa_exposta', '$cartao', '$termo', '$senhaCriptografada')";
    $cadastrar = $mysqli->query($sql) or die($mysqli->error);
    
    if(strlen($vendedor) == 14)
    {
        $consulta_plataforma = "SELECT * FROM attr_plataforma WHERE cnpj = '$vendedor' ORDER BY id DESC LIMIT 1";
        $con_plataforma = $mysqli->query($consulta_plataforma) or die($mysqli->error);
        $dado_plataforma = $con_plataforma->fetch_array();
        $id_vendedor = $dado_plataforma["id"];
    
        $sql = "INSERT INTO attr_venda (id, id_plataforma, id_plano, id_cliente, venc_boleto, prox_vencimento) VALUES ('$id_venda', '$id_vendedor', '$cartao', '$id_cliente', '$venc_boleto', '$prox_vencimento')";
        $venda = $mysqli->query($sql) or die($mysqli->error);
    }
    else
    {
        $consulta_vendedor = "SELECT * FROM attr_usuario WHERE usu_cpf = '$vendedor' ORDER BY usu_id DESC LIMIT 1";
        $con_vendedor = $mysqli->query($consulta_vendedor) or die($mysqli->error);
        $dado_vendedor = $con_vendedor->fetch_array();
        $id_vendedor = $dado_vendedor["usu_id"];
    
        $sql = "INSERT INTO attr_venda (id, id_vendedor, id_plano, id_cliente, venc_boleto, prox_vencimento) VALUES ('$id_venda', '$id_vendedor', '$cartao', '$id_cliente', '$venc_boleto', '$prox_vencimento')";
        $venda = $mysqli->query($sql) or die($mysqli->error);
    }
}

$mysqli->close();

header("Location:/compra_finalizada.php");
exit;
?>