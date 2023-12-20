function editarNoticia(idNoticia) {
    $.ajax({
        url  : '../../controle/usuarioExcluir.php',
        type : 'post',
        data : {
            idNoticia : idNoticia
        }
    })
    .done(function(resultado){
        if(resultado){
           window.location.href="usuarios.php";
        }else{
            alert('Erro ao aprovar');
        }
    });  		
}

function excluirNotícia(idNoticia) {
    $.ajax({
        url  : '../../controle/usuarioExcluir.php',
        type : 'post',
        data : {
            idNoticia : idNoticia
        }
    })
    .done(function(resultado){
        if(resultado){
           window.location.href="usuarios.php";
        }else{
            alert('Erro ao aprovar');
        }
    });  		
}