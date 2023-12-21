<?php
    include_once "../repo/patrimonioCRUD.php";

    $tipo = $_POST["tipo"];
	$codItem = $_POST["codItem"];
	$cod = ($_POST["cod"]);
	$desc = ($_POST["desc"]);
	if($tipo == 1){
		$quantidade = salvar($tipo, $codItem, $cod, $desc);	   
	
		if($quantidade > 0){
			echo  "<script>alert('Registro salvo com sucesso!');</script>";
			echo  "<script>window.location.replace('../patrimonial.php');</script>";
		}else{
			echo  "<script>alert('Erro ao salvar o registro');</script>";
			echo  "<script>window.location.replace('../patrimonial.php');</script>";		
		}
	}else{
		$verificar = buscarPorCodigo($codItem);
		if($verificar != null){
			$cont = baixa($codItem, $cod, $desc);
			if($cont > 0){
				if($quantidade > 0){
					echo  "<script>alert('Registro salvo com sucesso!');</script>";
					echo  "<script>window.location.replace('../patrimonial.php');</script>";
				}else{
					echo  "<script>alert('Erro ao salvar o registro');</script>";
					echo  "<script>window.location.replace('../patrimonial.php');</script>";		
				}
			}
		}
	}
    
?>