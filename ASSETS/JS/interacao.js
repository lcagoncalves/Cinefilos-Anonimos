let botao = document.querySelector('#menu-burguer');
let menu = document.querySelector('#menu');
let vetorFilmes;
botao.addEventListener('click', function(){
    menu.classList.toggle('ativo');
    botao.classList.toggle('ativo');
});

$('#menu-burguer').on("click", function(){
    $('#menu').toggleClass('escondido');
})

$('#adicionar-filme').on("click", function(){
    $('#janela-adicionar-filme').toggleClass('escondido');
});
