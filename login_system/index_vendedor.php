<?php
session_start();
include('conexao.php');

$consulta = "SELECT * FROM attr_usuario";
$con = $mysqli->query($consulta) or die($mysqli->error);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login - Attrative Pets</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
                            
				<form action="/login_system/verifica_login_vendedor.php" method="POST" class="login100-form validate-form">
					<span class="login100-form-title p-b-55">
						ATTR PET
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "CPF ou CNPJ é obrigatório">
						<input class="input100" type="text" id="login" name="login" placeholder="CPF / CNPJ">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="fa fa-id-card-o"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Senha é obrigatória">
						<input class="input100" type="password" id="senha" name="senha" placeholder="Senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>
					<div class="container-login100-form-btn p-t-25">
						<button type="submit" id="entrar" name="entrar" class="login100-form-btn">
							Login
						</button>
                    </div>
                </form>

                <div class="text-center w-full p-t-42 p-b-22">
                    <span class="txt1">
                        - OU -<br><br>Digite seu email para receber uma nova senha
                    </span>
                </div>

                <div class="wrap-input100 m-b-16" data-validate = "Email é obrigatório">
                    <input class="input100-recovery" type="text" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <span class="lnr lnr-envelope"></span>
                    </span>
                </div>

                <div class="container-login100-form-btn p-t-2">
                    <button class="login100-form-btn-recovery">
                        Esqueci minha senha
                    </button>
                </div>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>