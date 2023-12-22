<?php
    include_once "../repo/eventoCRUD.php";
    
    $evento = $_POST["evento"];
    $responsavel = $_POST["responsavel"];
    $data = ($_POST["data"]);
    $descricao = ($_POST["descricao"]);
    $quantidade = salvar($evento, $responsavel, $data, $descricao);
   
    include_once "../geral/alertas.php";
	if($quantidade > 0){
		sucesso('eventos.php');
	}else{
		error('eventos.php');		
	}

?>