<?php 

include('conexao.php');

$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha = ($_POST['senha']);
//$senha = md5($_POST['senha']);

  if (isset($entrar)) {
	$consulta = "SELECT * FROM attr_usuario WHERE usu_nome = '$login' AND usu_senha = '$senha'";
	$verifica = $mysqli->query($consulta) or die($mysqli->error);
	
	//var_dump($verifica);
      if (($verifica->num_rows)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='index.php';</script>";
        die();
      }else{
		//echo "Works!";
		setcookie("login",$login);
        header("Location:/login_system/pets_system/index.php");
      
      }
  }
?>