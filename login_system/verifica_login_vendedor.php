<?php 

include('conexao.php');

session_start();

$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha = md5($_POST['senha']);

  if (isset($entrar)) {
	$consulta = "SELECT * FROM attr_usuario WHERE usu_cpf = '$login' AND usu_senha = '$senha'";
	$verifica = $mysqli->query($consulta) or die($mysqli->error);
	
	//var_dump($verifica);
      if (($verifica->num_rows)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='index_vendedor.php';</script>";
        die();
      }else{
        //echo "Works!";
        setcookie("login",$login);
        $_SESSION['cpfcnpj'] = $login;
        header("Location:/formulario_venda_comissao.php");
      
      }
  }
?>