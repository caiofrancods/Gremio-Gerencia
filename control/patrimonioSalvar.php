<?php
    include_once "../repo/patrimonioCRUD.php";

    $tipo = $_POST["tipo"];
	$codItem = $_POST["codItem"];
	$cod = ($_POST["cod"]);
	$desc = ($_POST["desc"]);
	if($tipo == 1){
		$quantidade = salvar($codItem, $cod, $desc);	   
		
		include_once "../geral/alertas.php";
		if($quantidade > 0){
			sucesso('patrimonial.php');
		}else{
			error('patrimonial.php');		
		}
	}else{
		$verificar = buscarPorCodigo($codItem);
		include_once "../geral/alertas.php";
		if($verificar != null && $verificar['situacao'] != 2){
			$cont = baixa($codItem, $cod, $desc);
			if($cont > 0){
				sucesso('patrimonial.php');
			}else{
				error('patrimonial.php');
			}
		}else{
			error('patrimonial.php');
		}
	}
    
?>