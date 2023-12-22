<?php
    include_once "../repo/noticiasCRUD.php";

    $titulo = $_POST["titulo"];
    $subtitulo = $_POST["subtitulo"];
    $texto = ($_POST["noticia"]);
    $quantidade = salvar($titulo, $subtitulo, $texto);
   

	include_once "../geral/alertas.php";
	if($quantidade > 0){
		sucesso('noticias.php');
	}else{
		error('noticias.php');		
	}
?>