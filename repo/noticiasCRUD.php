<?
include_once "banco.php";
function salvar($titulo, $sub, $text) {
    try {
        $conexao = criarConexao();
        date_default_timezone_set('America/Sao_Paulo');
        $data = new DateTime();
        $dataFormatada = $data->format('d/m/Y H:i:s');
        $sql = "INSERT INTO Noticia(titulo, subtitulo, texto, dataHorario) 
                VALUES(:titulo, :subtitulo, :texto, :dataHorario);";
        $sentenca = $conexao->prepare($sql);
        $sentenca->bindValue(':titulo', $titulo);
        $sentenca->bindValue(':subtitulo', $sub);
        $sentenca->bindValue(':texto', $text);
        $sentenca->bindValue(':dataHorario', $dataFormatada);
        $sentenca->execute();
        $codigo = $conexao->lastInsertId();
        $conexao = null;
        return $codigo;
    } catch (PDOException $erro) {
        echo($erro);
        die();
    }
    
}

function excluir($codigo) {
    try {
        $conexao = criarConexao();
        $sql = "DELETE FROM Noticia WHERE codigo = :codigo;";
        $sentenca = $conexao->prepare($sql);
        $sentenca->bindValue(':codigo', $codigo);
        $sentenca->execute(); 
        $conexao = null;
        return $sentenca->rowCount();
    } catch (PDOException $erro) {
        echo($erro);
        return 0;
    }
    
}

function listar(){
    try{
        $sql = "SELECT * FROM Noticia ORDER BY dataHorario DESC;";

        $conexao = criarConexao();        
        $sentenca = $conexao->prepare($sql);
    
        $sentenca->execute();     
        $conexao = null;
        return $sentenca->fetchAll();
    }catch (PDOException $erro){
        echo ($erro);
    }
}

function buscarPorId($codigo){
    try{
        $sql = "SELECT * FROM Noticia WHERE codigo = :codigo;";

        $conexao = criarConexao();        
        
        $sentenca = $conexao->prepare($sql);
        $sentenca->bindValue(':codigo', $codigo);
    
        $sentenca->execute();     
        $conexao = null;
        return $sentenca->fetch();
    }catch (PDOException $erro){
        echo ($erro);
    }
}

function editar($id, $titulo, $sub, $text) {
    try {
        $conexao = criarConexao();
        date_default_timezone_set('America/Sao_Paulo');
        $data = new DateTime();
        $dataFormatada = $data->format('d/m/Y H:i:s');
        $sql = "UPDATE Noticia SET titulo = :titulo, subtitulo = :subtitulo, texto = :texto, edicao = :edicao WHERE codigo = :codigo;";
        $sentenca = $conexao->prepare($sql);
        $sentenca->bindValue(':titulo', $titulo);
        $sentenca->bindValue(':subtitulo', $sub);
        $sentenca->bindValue(':texto', $text);
        $sentenca->bindValue(':edicao', $dataFormatada);
        $sentenca->bindValue(':codigo', $id);
        $sentenca->execute();
        $conexao = null;
        return $id;
    } catch (PDOException $erro) {
        echo($erro);
        die();
    }
    
}

function salvarImagem($nome, $caminho) {
    try {
        $conexao = criarConexao();
        $sql = "INSERT INTO Imagem(nome, caminho) 
                VALUES(:nome, :caminho);";
        $sentenca = $conexao->prepare($sql);
        $sentenca->bindValue(':nome', $nome);
        $sentenca->bindValue(':caminho', $caminho);
        $sentenca->execute();
        $codigo = $conexao->lastInsertId();
        $conexao = null;
        return $codigo;
    } catch (PDOException $erro) {
        echo($erro);
        die();
    }
    
}
function listarImagens(){
    try{
        $sql = "SELECT * FROM Imagem ORDER BY nome;";

        $conexao = criarConexao();        
        $sentenca = $conexao->prepare($sql);
    
        $sentenca->execute();     
        $conexao = null;
        return $sentenca->fetchAll();
    }catch (PDOException $erro){
        echo ($erro);
    }
}