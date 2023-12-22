<?php
    include_once "../repo/noticiasCRUD.php";

    $codigo = $_GET["codigo"];
    $quantidade = excluir($codigo);
   

    include_once "../geral/alertas.php";
	if($quantidade > 0){
		sucesso('noticias.php');
	}else{
		error('noticias.php');		
	}
?>