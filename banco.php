<?php

	 
	 	$host = "127.0.0.1";
        $user = "root";
        $password = "";
        $dbName = "tarefas";   
        
        $conexao = mysqli_connect($host, $user, $password, $dbName);
	 
	 

	 if (mysqli_connect_errno($conexao)) {
	 	echo "Problemas ao conectar, verique os dados";
	 	 die('erro na conexão');


	 }
	

			 function buscar_tarefas($conexao)
			 {
			 	$sqlBusca = ('SELECT * FROM tarefas');
			 	$resultado = mysqli_query($conexao, $sqlBusca);
			 	$tarefas = array();


				 while ($tarefas = mysqli_fetch_assoc($resultado)) 
				 {
				 	$tarefas[] = $tarefas;
				 }
				 return $tarefas;
			 }
			


?>