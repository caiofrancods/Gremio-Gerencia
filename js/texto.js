var inputElement = document.getElementById('titulo');
var contadorElement = document.getElementById('contador');

// Adiciona um ouvinte de evento para o evento de entrada no campo
inputElement.addEventListener('input', function() {
    // Obtém o número de caracteres digitados
    var caracteresDigitados = inputElement.value.length;

    // Calcula os caracteres restantes
    var caracteresRestantes = 60 - caracteresDigitados;

    // Atualiza o texto do elemento de contagem
    contadorElement.textContent = 'Título da Notícia (Caracteres restantes: ' + caracteresRestantes + ')';
});

var inputElement2 = document.getElementById('subtitulo');
var contadorElement2 = document.getElementById('sub');

// Adiciona um ouvinte de evento para o evento de entrada no campo
inputElement2.addEventListener('input', function() {
    // Obtém o número de caracteres digitados
    var caracteresDigitados = inputElement2.value.length;

    // Calcula os caracteres restantes
    var caracteresRestantes = 40 - caracteresDigitados;

    // Atualiza o texto do elemento de contagem
    contadorElement2.textContent = 'Subtítulo da Notícia (Caracteres restantes: ' + caracteresRestantes + ')';
});
