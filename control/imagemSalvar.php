<?php
	include_once "../repo/noticiasCRUD.php";

	$arquivo = $_FILES['imagem'];

	$nomeArquivo = $arquivo['name'];
	$extensao = pathinfo($nomeArquivo, PATHINFO_EXTENSION);
	$temp = $arquivo['tmp_name'];

	if($extensao != 'png' && $extensao != 'jpeg' && $extensao != 'jpg'){
		echo  "<script>alert('Apenas Arquivos de Imagem');</script>";
		echo  "<script>window.location.replace('../noticias.php');</script>";
	}else{
		$caminho = "/opt/lampp/htdocs/Gremio-Gerencia/imagens/noticias/".$nomeArquivo;
		move_uploaded_file($temp, $caminho);
		$quantidade = salvarImagem($nomeArquivo, $caminho);

		include_once "../geral/alertas.php";
		if($quantidade > 0){
			sucesso('noticias.php');
		}else{
			error('noticias.php');		
		}
	}
?>
