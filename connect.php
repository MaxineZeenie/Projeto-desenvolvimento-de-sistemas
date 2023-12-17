<?php
    
	$conn = mysqli_connect("localhost", "root", "", "cadastro");
	if (!$conn) 
	{
		die("Erro ao conectar no servidor: ".mysqli_connect_error());
	} 
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		$user = $_POST["user"];
	    $senha = $_POST["senha"];
	    $nome = $_POST["nome"];
	    $cpf = $_POST["cpf"];
	    $data = $_POST["data"];
	    $sexo = $_POST["sexo"];
	    $rua = $_POST["rua"];
	    $numero = $_POST["numero"];
	    $comp = $_POST["comp"];
	    $bairro = $_POST["bairro"];
	    $cidade = $_POST["cidade"];
		
		$result = mysqli_query($conn, "INSERT INTO cadastro (user, senha, nome, cpf, data, sexo, rua, numero, comp, bairro, cidade) 
	VALUES ('{$user}', '{$senha}', '{$nome}', '{$cpf}', '{$data}', '{$sexo}', '{$rua}', '{$numero}', '{$comp}', '{$bairro}', '{$cidade}')");
	
	if ($result) 
	{
		header("location: cad.html");
	} else {
		echo "Erro ao inserir os dados: " .mysqli_error($conn);
	}
	
	}
		
	mysqli_close($conn);
?>