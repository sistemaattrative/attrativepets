<?php
session_start();
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Attrative Pets</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</head>
	<body class="is-preload">

		<!-- Header -->
		<header id="header">
				<a class="logo" href="index.html">Attrative Pets</a>
				<nav>
					<a href="/index.html"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="/login_system/index.php">Vendedor</a></li>
					<li><a href="/login_system/index.php">Plataforma</a></li>
				</ul>
			</nav>

		<!-- Heading -->
			<div id="heading" >
				<h1></h1>
			</div>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
						<!-- Form -->
						<h3 align=center>Proposta enviada com sucesso!</h3>
						<br>
						<h4 align=center>Agradecemos a preferência</h4>
						<br>
						<div align=center>
							<a href='/pdf/index.php' class="button primary fit small" style="background-color:blue;width:30%;">Baixar PDF da Proposta de Adesão</a>
						</div>
						<br>
						<div align=center>
							<a href='/index.html' class="button primary fit small" style="background-color:green;width:10%;">Ir para Home</a>
						</div>
					</div>
				</div>
			</section>

		

		<!-- Footer -->
		<footer id="footer">
				<div class="inner">
					<div class="content">
						<section>
							<h3>Tecnologia à serviço da medicina veterinária</h3>
							<p>Nossos Clientes contam com muitos dos recursos disponíveis na medicina humana tais como tomografia, ressonância magnética, tratamentos oncológicos, ortopedia, UTIs, etc. Além disso, contamos com exames e procedimentos de última geração, que prolongam e melhoram a qualidade de vida dos cachorros.</p>
						</section>
						<section>
							<h4>Visite nossas redes sociais</h4>
							<ul class="plain">
								<li><a href="#"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
								<li><a href="#"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
							</ul>
						</section>
					</div>
					<div class="copyright">
						&copy; Attrative @2020
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>