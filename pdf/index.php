<?php
$dado = 'test';

$consulta = "SELECT * FROM attr_beneficios";
$con = $mysqli->query($consulta) or die($mysqli->error);
/*
$consulta = "SELECT * FROM attr_venda WHERE ";
$con = $mysqli->query($consulta) or die($mysqli->error);
*/

	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();

	// Carrega seu HTML
	$dompdf->load_html('
			<!DOCTYPE html>
			<html lang="pt-br">
				<head>
					<meta charset="utf-8">
					<title>Celke</title>
					<link href="css/personalizado.css" rel="stylesheet">
				</head>
					<p class="img"><img src="logo_attrative.png" width="212" height="193"></p>
					<h2>Proposta de Adesão</h2>
					<h2>Proposta de Adesão</h2>
					<p>Test</p>
					
					<h2>DECLARAÇÃO PROPONENTE</h2>
					<p>Declaro, que estou ciente e de acordo, sob pena de perda de direito de cobertura, conforme previsto no artigo 766 do Código Civil, que: As informações prestadas são verdadeiras e completas. O não pagamento da mensalidade em dia implicará na perda e da utilização das coberturas. Tomei conhecimento prévio das Condições Gerais do produto, que também estará disponível no site www.attrative.com.br DENTRO DAS CONDIÇÕES DE ACEITAÇÃO DA ATTRATIVE; A cobertura inicia-se após o cadastramento da proposta no sistema e a confirmação do pagamento. A Attrative tem 5 dias para analisar e recusar a proposta. Em caso de atraso do pagamento da mensalidade, será acescida de uma taxa de juros. O segurado poderá restabelecer os efeitos do contrato, desde que retome os pagamentos atrasados, assim como os pagamentos dos juros. Para efeito de cobertura dos benefícios, serviços e/ou assistências, importante ressaltar que a falta de pagamento de mensalidade em dia implicará no cancelamento automático das coberturas tratadas, seja qual a modalidade de pagamento escolhida pelo cliente. No caso de cancelamento do contrato a pedido do cliente, este deverá fazê-lo com 30 dias de antecedência, recebendo a devolução proportional, conforme a modalidade escolhida, sendo que as coberturas tratadas serão automaticamente canceladas. O proponente, desde já, autoriza a anui que a Attrative Assessoria de negócios lhe encaminhe comunicações da empresa, por meio de dados por ele disponibilizados. No momento da assinatura da proposta de adesão, declara que optou pelas coberturas, serviços e/ou assistência informadas na proposta. As condições contratuais/regulamento deste produto estão amparadas junto a SUSEP, assim como poderão ser consultadas no endereço eletrônico www.susep.gov.br, de acordo com os números de processos: NR. 15414.001215.2008.19 Coberturas por Morte Acidental, Invalidez Permanente Total ou Parcial por Acidente, Assistência Funeral Familiar e Auxílio Alimentação. NR. 15414.003760/2011-45 – Série Aberta: - Sorteio Mensal. Os Serviços e/ou Assistências deste produto, são de responsabilidade, manutenção, controle e administração dos prestadores de serviços, como das coberturas, da CAPEMISA Seguradora e amparadas através da Apólice de NR. 1234567, podendo ser consultadas no site www.capemisa.com.br As Condições Gerais do cartão Attrative essencial Ouro podem ser consultadas em www.attrative.com.br.</p>
				
					<div class="subtitulo">
						Teste
					</div>
				<body>
			</html>
		');

	
	$dompdf->setPaper('A4', 'portrait');
	
	//Renderizar o html
	$dompdf->render();
	
	//Exibir a página
	$dompdf->stream(
		"Proposta_Adesao-AttrativePet.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
	
?>