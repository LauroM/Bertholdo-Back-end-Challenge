<?php

require 'Address.php';

if(!empty($_POST['cep'])){
	
	$cep = $_POST['cep'];
// variavel $cp incorreta, $cep
	$address = new Address();
	$result = $address->get_address($cep);

	// echo "<br><br>CEP Informado: $cep<br>";
// variavel $addres incorreta, $address
// variavel $logradoro incorreta, $logradouro
	// echo "Rua: $address->logradouro<br>";
	// echo "Bairro: $address->bairro<br>";
// Variavel incorreta $adress, $address
	// echo "Estado: $address->uf<br>";
}

?>
<html>
	<head>
		<link rel="stylesheet" href="assets/css.css">
	</head>
	<title> MEU CEP </title>
	<body> 
		<!-- action index faltando letra -->
		<form action="index.php" method="post"> 
			<label> Insira o CEP: </label>
			<input type="text" name="cep">
			<!-- tag input e deve ser button -->
			<button type="submit" value="Enviar">Enviar</button>
		<!-- form nao ta fechado -->
		</form>
		<?php 
			if(isset($result)){
				if(!$result->erro){
					echo('<strong class="sucesso">Endereco nao encontrado</strong>');
					echo(isset($cep) ? "<h3>Cep informado: $cep</h3>" : '');
					echo("<h3>Rua: $result->logradouro</h3>");
					echo("<h3>Bairro: $result->bairro</h3>");
					echo("<h3>UF: $result->uf</h3>");
				}else{
					echo('<strong class="erro">Endereco nao encontrado</strong>');
				}
			}
		?>
	</body>
</html>

<!-- Run on server -->
<!-- sudo apt-get install php -->
<!-- php -S localhost:9000 -->