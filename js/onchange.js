document.getElementById("just").style.display = 'none';
function formularioBens(){
    var tipo = document.getElementById("tipo").value;
    if (tipo == 2){
        document.getElementById("desc").style.display = 'none';
        document.getElementById("just").style.display = 'block';
    }else{
        document.getElementById("desc").style.display = 'block';
        document.getElementById("just").style.display = 'none';
    }
}