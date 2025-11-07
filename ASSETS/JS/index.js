let botao = document.querySelector('#menu-burguer');
let menu = document.querySelector('#menu');
botao.addEventListener('click', function(){
    menu.classList.toggle('ativo');
    botao.classList.toggle('ativo');
});