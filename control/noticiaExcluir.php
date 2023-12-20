<?php
    include_once "../repo/noticiasCRUD.php";

    $codigo = $_GET["codigo"];
    $quantidade = excluir($codigo);
   

	if($quantidade > 0){
		echo  "<script>alert('Registro salvo com sucesso!');</script>";
		echo  "<script>window.location.replace('../noticias.php');</script>";
	}else{
		echo  "<script>alert('Erro ao salvar o registro');</script>";
		echo  "<script>window.location.replace('../noticias.php');</script>";		
	}
?>