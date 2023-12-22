<?php
    include_once "../repo/financeiroCRUD.php";

    $tipo = $_POST["tipo"];
    $valor = $_POST["valor"];
    $cod = ($_POST["cod"]);
    $desc = ($_POST["desc"]);
    $quantidade = salvar($tipo, $valor, $cod, $desc);
   

    include_once "../geral/alertas.php";
	
    if($quantidade > 0){
		sucesso('financeiro.php');
	}else{
		error('noticias.php');		
	}
?>