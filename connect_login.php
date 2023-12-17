<?php

    $conn = mysqli_connect("localhost", "root", "", "cadastro");
	if (!$conn) 
	{
		die("Erro ao conectar no servidor: ".mysqli_connect_error());
	} 
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$user = $_POST["user"];	
    $senha = $_POST["senha"];

    $sql = "SELECT user, senha FROM cadastro WHERE user='$user' AND senha='$senha' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      
          header("location: login_s.html");
		
    } else {
        header("location: login_error.html");
    }
	}
	
	mysqli_close($conn);
?>