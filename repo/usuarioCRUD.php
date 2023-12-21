<?
include_once "banco.php";

function autenticarUsuario($email, $senha) {
    try {
        $sql = "SELECT * FROM Usuario WHERE senha = :senha AND email = :email;";

        $conexao = criarConexao();
        $sentenca = $conexao->prepare($sql);
        $sentenca->bindValue(':senha', $senha);
        $sentenca->bindValue(':email', $email);

        $sentenca->execute();
        $conexao = null;

        return $sentenca->fetch();
    } catch (PDOException $erro) {
        echo $erro;
        die();
    }
}