<?php
    include_once "../repo/eventoCRUD.php";

    $evento = $_POST["evento"];
    $responsavel = $_POST["responsavel"];
    $data = ($_POST["data"]);
    $descricao = ($_POST["descricao"]);
    $quantidade = salvar($evento, $responsavel, $data, $descricao);
   

	if($quantidade > 0){
		echo  "<script>alert('Registro salvo com sucesso!');</script>";
		echo  "<script>window.location.replace('../eventos.php');</script>";
	}else{
		echo  "<script>alert('Erro ao salvar o registro');</script>";
		echo  "<script>window.location.replace('../eventos.php');</script>";		
	}
?>