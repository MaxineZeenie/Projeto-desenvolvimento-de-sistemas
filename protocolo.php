<?php

    $conn = mysqli_connect("localhost", "root", "", "cadastro");
	if (!$conn) 
	{
		die("Erro ao conectar no servidor: ".mysqli_connect_error());
	} 
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$cont = $_POST["cont"];	
    $datap = $_POST["datap"];
    $descricao = $_POST["descricao"];

    $sql = "SELECT nome FROM cadastro WHERE nome = '$cont'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
       
        $sql = "INSERT INTO protocolo (datap, descricao) VALUES ('{$datap}', '{$descricao}')";
        
        if (mysqli_query($conn, $sql) === TRUE) {
            header("location: protocolo_cad.html");
        } else {
            echo "Erro ao registrar o protocolo: " . $conn->error;
        }
    } else {
        header("location: prot_error.html");
    }
	}
	
	mysqli_close($conn);
?>