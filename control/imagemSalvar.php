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

		if($quantidade > 0){
			echo  "<script>alert('Registro salvo com sucesso!');</script>";
			echo  "<script>window.location.replace('../noticias.php');</script>";
		}else{
			echo  "<script>alert('Erro ao salvar o registro');</script>";
			echo  "<script>window.location.replace('../noticias.php');</script>";		
		}
	}
?>
