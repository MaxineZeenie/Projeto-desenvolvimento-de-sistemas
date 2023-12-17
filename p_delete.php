<?php

    $conn = mysqli_connect("localhost", "root", "", "cadastro");
	if (!$conn) 
	{
		die("Erro ao conectar no servidor: ".mysqli_connect_error());
	} 
	
	$sql = "DELETE FROM protocolo ORDER BY p_id DESC LIMIT 1";

    if (mysqli_query($conn, $sql) === TRUE) {
        header("location: protocolo_del.html");
    } else {
        echo "Erro ao excluir o protocolo: " . $conn->error;
    }
	
	mysqli_close($conn);
?>