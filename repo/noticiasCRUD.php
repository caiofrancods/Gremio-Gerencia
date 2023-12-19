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