<?php 

include('conexao.php');

session_start();

$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha = md5($_POST['senha']);

  if (isset($entrar)) {
	$consulta = "SELECT * FROM attr_cliente WHERE cpf = '$login' AND senha = '$senha'";
	$verifica = $mysqli->query($consulta) or die($mysqli->error);
	
	//var_dump($verifica);
      if (($verifica->num_rows)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login_cliente.php';</script>";
        die();
      }else{
        //echo "Works!";
        setcookie("login",$login);
        $_SESSION['cpf'] = $login;
        header("Location:/compra_finalizada.php");
      
      }
  }
?>