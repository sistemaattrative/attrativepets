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
				<h1>Contratação Cartão Pets</h1>
			</div>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
						<!-- Form -->
						<h3>Formulário</h3>
						
						<form action="/login_system/cadastrar_cliente.php" method="POST">
							<div class="row gtr-uniform">
								<div class="col-6 col-12-xsmall">
									<input type="hidden" name="vendedor" id="vendedor" placeholder="CPF/CPNJ Vendedor/Plataforma" value="<?php if($_POST['cpfcnpj']){echo $_POST['cpfcnpj'];}else{ echo $_SESSION['cpfcnpj'];} ?>"/>
								</div>
								<div class="col-12 col-12-xsmall">
									<h4>Cliente</h4>
								</div>
								<div class="col-6 col-12-xsmall">
									<input type="text" name="nome" id="nome" value="" placeholder="Nome" />
								</div>
								<div class="col-6 col-12-xsmall">
									<input type="text" name="email" id="email" value="" placeholder="Email" />
								</div>
								<div class="col-6 col-12-xsmall">
									<input type="text" name="cpf" id="cpf" value="" placeholder="CPF" />
								</div>
								<div class="col-6 col-12-xsmall">
									<input type="text" name="rg" id="rg" value="" placeholder="RG" />
								</div>
								<div class="col-6 col-12-xsmall">
									<input type="text" name="orgao_emissor" id="orgao_emissor" value="" placeholder="Orgão Emissor" />
								</div>
								<div class="col-6 col-12-xsmall">
									<input type="text" name="data_expedicao" id="data_expedicao" value="" placeholder="Data expedição" />
								</div>
								<div class="col-6 col-12-xsmall">
									<input type="text" name="data_nascimento" id="data_nascimento" value="" placeholder="Data Nascimento" />
								</div>
								<div class="col-6 col-12-xsmall">
									<input type="text" name="estado_civil" id="estado_civil" value="" placeholder="Estado Civil" />
								</div>
								<div class="col-6 col-12-xsmall">
									<input type="text" name="genero" id="genero" value="" placeholder="Gênero" />
								</div>
								<div class="col-6 col-12-xsmall">
									<input type="text" name="telefone1" id="telefone1" value="" placeholder="Telefone 1" />
								</div>
								<div class="col-6 col-12-xsmall">
									<input type="text" name="telefone2" id="telefone2" value="" placeholder="Telefone 2" />
								</div>
								<div class="col-6 col-12-xsmall">
									<input type="text" name="nome_mae" id="nome_mae" value="" placeholder="Nome da mãe" />
								</div>
								<div class="col-6 col-12-xsmall">
									<input type="text" name="nome_pai" id="nome_pai" value="" placeholder="Nome do pai" />
								</div>
								<div class="col-6 col-12-xsmall">
									<input type="text" name="cep" id="cep" value="" placeholder="CEP" />
								</div>
								<div class="col-6 col-12-xsmall">
									<input type="text" name="endereco" id="endereco" value="" placeholder="Endereço" />
								</div>
								<div class="col-6 col-12-xsmall">
									<input type="text" name="bairro" id="bairro" value="" placeholder="Bairro" />
								</div>
								<div class="col-6 col-12-xsmall">
									<input type="text" name="numero" id="numero" value="" placeholder="Numero" />
								</div>
								<div class="col-6 col-12-xsmall">
									<input type="text" name="complemento" id="complemento" value="" placeholder="Complemento" />
								</div>
								<div class="col-6 col-12-xsmall">
									<input type="text" name="estado" id="estado" value="" placeholder="Estado" />
								</div>
								<div class="col-6 col-12-xsmall">
									<input type="text" name="cidade" id="cidade" value="" placeholder="Cidade" />
								</div>
								<div class="col-6 col-12-xsmall">
									<input type="text" name="profissão" id="profissão" value="" placeholder="Profissão" />
								</div>
								<div class="col-6 col-12-xsmall">
									<input type="text" name="renda" id="renda" value="" placeholder="Renda" />
								</div>
								<div class="col-6 col-12-xsmall">
									<input type="text" name="pessoa_exposta" id="pessoa_exposta" value="" placeholder="Pessoa politicamente exposta" />
								</div>
								<div class="col-6 col-12-xsmall">
									<input maxlength="6" type="password" name="senha" id="senha" value="" placeholder="Senha" />
								</div>

								<div class="col-12">
									<select name="cartao" id="cartao">
										<option value="">- Selecione o plano -</option>
										<option value="1">Cartão Silver</option>
										<option value="2">Cartão Gold</option>
										<option value="3">Cartão Black</option>
									</select>
								</div>

								<div class="col-12">
									<select name="tipoPagamento" id="tipoPagamento">
										<option value="">- Selecione o tipo de pagamento -</option>
										<option value="1">Cartão de Crédito</option>
										<option value="2">Boleto</option>
									</select>
								</div>

								<div class="col-6 col-12-xsmall">
									<p>Data de vencimento</p>
									<input type="text" name="dataVencimento" id="dataVencimento" value="<?php echo date('d/m/y', strtotime('+3 days')); ?>"/>
								</div>

								<div class="col-12">
									<select name="proximoVencimento" id="proximoVencimento">
										<option value="">- Selecione o próximo dia de vencimento -</option>
										<option value="5">Todo dia 05</option>
										<option value="10">Todo dia 10</option>
										<option value="15">Todo dia 15</option>
										<option value="20">Todo dia 20</option>
										<option value="25">Todo dia 25</option>
									</select>
								</div>
								<!-- Break -->
									<!--
									<div class="col-12 col-12-small">
											<h4>Informe a quantidade de pets:</h4>
									</div>
									<div class="col-4 col-12-small">
										<input type="radio" id="radio-alpha" name="radio" checked>
										<label for="radio-alpha">Individual</label>
									</div>
									<div class="col-4 col-12-small">
										<input type="radio" id="radio-beta" name="radio">
										<label for="radio-beta">2 a 4</label>
									</div>
									<div class="col-4 col-12-small">
										<input type="radio" id="radio-gamma" name="radio">
										<label for="radio-gamma">5 a 20</label>
									</div>
								-->
								<!-- Break -->
								<div class="col-6 col-12-small">
									<!-- Button trigger modal -->
									<button type="button" data-toggle="modal" data-target="#exampleModalCenter">Ler os termos de responsabilidade</button>
								</div>
								<div class="col-6 col-12-small">
									<input type="checkbox" id="checkbox-beta" name="termo" value="true" checked>
									<label for="checkbox-beta">Aceito os termos de responsabilidade</label>
								</div>
								<!-- Break -->
								<!--
									<div class="col-12">
										<textarea name="textarea" id="textarea" placeholder="Observações" rows="6"></textarea>
									</div>
								-->
								<!-- Break -->
								<div class="col-12">
									<ul class="actions">
										<li><input type="submit" value="Enviar" class="primary" /></li>
										<li><input type="reset" value="Limpar" /></li>
									</ul>
								</div>
							</div>
						</form>
					</div>
				</div>
			</section>

		<!-- Modal -->
		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<br><br><br><br>
			<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Termos de Responsabilidade</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>
				<div class="modal-body">
				Declaro, que estou ciente e de acordo, sob pena de perda de direito de cobertura, conforme previsto no artigo 766 do Código Civil, que: As informações prestadas são verdadeiras e completas. O não pagamento da mensalidade em dia implicará na perda e da utilização das coberturas. Tomei conhecimento prévio das Condições Gerais do produto, que também estará disponível no site www.attrative.com.br DENTRO DAS CONDIÇÕES DE ACEITAÇÃO DA ATTRATIVE; A cobertura inicia-se após o cadastramento da proposta no sistema e a confirmação do pagamento. A Attrative tem 5 dias para analisar e recusar a proposta. Em caso de atraso do pagamento da mensalidade, será acescida de uma taxa de juros. O segurado poderá restabelecer os efeitos do contrato, desde que retome os pagamentos atrasados, assim como os pagamentos dos juros. Para efeito de cobertura dos benefícios, serviços e/ou assistências, importante ressaltar que a falta de pagamento de mensalidade em dia implicará no cancelamento automático das coberturas tratadas, seja qual a modalidade de pagamento escolhida pelo cliente. No caso de cancelamento do contrato a pedido do cliente, este deverá fazê-lo com 30 dias de antecedência, recebendo a devolução proportional, conforme a modalidade escolhida, sendo que as coberturas tratadas serão automaticamente canceladas. O proponente, desde já, autoriza a anui que a Attrative Assessoria de negócios lhe encaminhe comunicações da empresa, por meio de dados por ele disponibilizados. No momento da assinatura da proposta de adesão, declara que optou pelas coberturas, serviços e/ou assistência informadas na proposta. As condições contratuais/regulamento deste produto estão amparadas junto a SUSEP, assim como poderão ser consultadas no endereço eletrônico www.susep.gov.br, de acordo com os números de processos: NR. 15414.001215.2008.19 Coberturas por Morte Acidental, Invalidez Permanente Total ou Parcial por Acidente, Assistência Funeral Familiar e Auxílio Alimentação. NR. 15414.003760/2011-45 – Série Aberta: - Sorteio Mensal. Os Serviços e/ou Assistências deste produto, são de responsabilidade, manutenção, controle e administração dos prestadores de serviços, como das coberturas, da CAPEMISA Seguradora e amparadas através da Apólice de NR. 1234567, podendo ser consultadas no site www.capemisa.com.br As Condições Gerais do cartão Attrative essencial Ouro podem ser consultadas em www.attrative.com.br.
				</div>
				<div class="modal-footer">
				<button type="button" data-dismiss="modal">Fechar</button>
				</div>
			</div>
			</div>
		</div>

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