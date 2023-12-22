<?
include_once "banco.php";
function salvar($nome, $resp, $data, $descricao) {
    try {
        $conexao = criarConexao();
        $sql = "INSERT INTO Evento(nome, responsavel, dataHorario, descricao) 
                VALUES(:nome, :responsavel, :dataHorario, :descricao);";
        $sentenca = $conexao->prepare($sql);
        $sentenca->bindValue(':nome', $nome);
        $sentenca->bindValue(':responsavel', $resp);
        $sentenca->bindValue(':dataHorario', $data);
        $sentenca->bindValue(':descricao', $descricao);
        $sentenca->execute();
        $codigo = $conexao->lastInsertId();
        $conexao = null;
        return $codigo;
    } catch (PDOException $erro) {
        return $erro;
    }
    
}

function excluir($codigo) {
    try {
        $conexao = criarConexao();
        $sql = "DELETE FROM Evento WHERE codigo = :codigo;";
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
        $sql = "SELECT * FROM Evento;";

        $conexao = criarConexao();        
        $sentenca = $conexao->prepare($sql);
    
        $sentenca->execute();     
        $conexao = null;
        return $sentenca->fetchAll();
    }catch (PDOException $erro){
        echo ($erro);
    }
}
function listarEventosDaSemana() {
    try {
        // Obtém a data e hora atuais
        $dataAtual = date("Y-m-d H:i:s");

        // Calcula a data do domingo da semana atual
        $domingoDaSemana = date("Y-m-d", strtotime("last sunday", strtotime($dataAtual)));

        // Calcula a data do sábado da semana atual
        $sabadoDaSemana = date("Y-m-d", strtotime("next saturday", strtotime($dataAtual)));

        // Consulta SQL com a condição da semana e data futura
        $sql = "SELECT * FROM Evento WHERE dataHorario BETWEEN :domingoDaSemana AND :sabadoDaSemana AND dataHorario > :dataAtual;";

        $conexao = criarConexao();
        $sentenca = $conexao->prepare($sql);

        // Associa os parâmetros
        $sentenca->bindParam(":domingoDaSemana", $domingoDaSemana);
        $sentenca->bindParam(":sabadoDaSemana", $sabadoDaSemana);
        $sentenca->bindParam(":dataAtual", $dataAtual);

        $sentenca->execute();
        $conexao = null;

        return $sentenca->fetchAll();
    } catch (PDOException $erro) {
        echo ($erro);
    }
}

function listarEventosDaPróximaSemana() {
    try {
        // Obtém a data e hora atuais
        $dataAtual = date("Y-m-d H:i:s");

        // Calcula a data do próximo domingo
        $proximoDomingo = date("Y-m-d", strtotime("next sunday", strtotime($dataAtual)));

        // Calcula a data do próximo sábado
        $proximoSabado = date("Y-m-d", strtotime("next saturday", strtotime($proximoDomingo)));

        // Consulta SQL com a condição da próxima semana e data futura
        $sql = "SELECT * FROM Evento WHERE dataHorario BETWEEN :proximoDomingo AND :proximoSabado AND dataHorario > :dataAtual;";

        $conexao = criarConexao();
        $sentenca = $conexao->prepare($sql);

        // Associa os parâmetros
        $sentenca->bindParam(":proximoDomingo", $proximoDomingo);
        $sentenca->bindParam(":proximoSabado", $proximoSabado);
        $sentenca->bindParam(":dataAtual", $dataAtual);

        $sentenca->execute();
        $conexao = null;

        return $sentenca->fetchAll();
    } catch (PDOException $erro) {
        echo ($erro);
    }
}
