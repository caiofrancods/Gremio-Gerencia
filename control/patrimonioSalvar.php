<?php
    include_once "../repo/patrimonioCRUD.php";

    $tipo = $_POST["tipo"];
    $valor = $_POST["valor"];
    $cod = ($_POST["cod"]);
    $desc = ($_POST["desc"]);
    $quantidade = salvar($tipo, $valor, $cod, $desc);
   

	if($quantidade > 0){
		echo  "<script>alert('Registro salvo com sucesso!');</script>";
		echo  "<script>window.location.replace('../patrimonial.php');</script>";
	}else{
		echo  "<script>alert('Erro ao salvar o registro');</script>";
		echo  "<script>window.location.replace('../patrimonial.php');</script>";		
	}
?>