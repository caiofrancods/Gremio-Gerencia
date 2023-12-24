<?php
    session_start();

    if (!isset($_SESSION['dadosUsuario'])) {
        echo "<script>location.href='index.php?acesso=1';</script>";
    }else{
        $dadosUsuario = $_SESSION['dadosUsuario'];
    }
?>