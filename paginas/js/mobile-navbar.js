// Seleciona o elemento <ul> com a classe 'nav-list'
var ul = document.querySelector('.nav-list');

// Seleciona o ícone dentro do botão de menu com a classe 'menu-btn'
var menuBtn = document.querySelector('.menu-btn i');

// Função que alterna a visibilidade do menu
function menuShow() {
    // Verifica se a lista de navegação já possui a classe 'open'
    if (ul.classList.contains('open')) {
        // Se tiver, remove a classe 'open', ocultando o menu
        ul.classList.remove('open');
    } else {
        // Se não tiver, adiciona a classe 'open', exibindo o menu
        ul.classList.add('open');
    }
}
