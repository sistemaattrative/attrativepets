<?php	

	include_once("conexao.php");

	$consulta = "SELECT * FROM attr_cliente WHERE cpf = '45354354'";
	$con = $mysqli->query($consulta) or die($mysqli->error);
	$dado = $con->fetch_array();

	$html = '<table border=1';	
	$html .= '<thead>';
	$html .= '<tr>';
	$html .= '<th>ID</th>';
	$html .= '<th>COD Transação</th>';
	$html .= '<th>Tipo de Pagamento</th>';
	$html .= '<th>Status da Transação</th>';
	$html .= '<th>E-mail</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	
	//$result_transacoes = "SELECT * FROM attr_cliente WHERE cpf = '45354354'";
	//$dado = mysqli_query($conn, $result_transacoes);
		$html .= '<tr><td>'.$dado['id'] . "</td>";
		$html .= '<td>'.$dado['nome'] . "</td>";
		$html .= '<td>'.$dado['cpf'] . "</td>";
		$html .= '<td>'.$dado['rg'] . "</td>";
		$html .= '<td>'.$dado['cep'] . "</td></tr>";	
	
	$html .= '</tbody>';
	$html .= '</table';

	
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	$dompdf->load_html('
			<h1 style="text-align: center;">Celke - Relatório de Transações</h1>
			'. $html .'
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatorio_celke.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>