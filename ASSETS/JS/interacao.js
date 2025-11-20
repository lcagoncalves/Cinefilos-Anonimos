let vetorFilmes = [];

let inputNomeEl = document.querySelector('#input-nome-filme');
let inputNotaEl = document.querySelector('#input-nota-filme');
let inputResenhaEl = document.querySelector('#input-resenha-filme');
let inputURLEl = document.querySelector('#input-url-filme');
let inputCategoriaEl = document.querySelector('#input-categoria-filme');
let carregarEl = document.querySelector('#carregar');

$('#menu-burguer').on("click", function(){
    $('#menu').toggleClass('escondido');
});

$('#adicionar-filme').on("click", function(){
    $('#janela-adicionar-filme').toggleClass('escondido');
});

$('#salvar').on("click", function(){
    const novoFilme = {
        id: vetorFilmes.length-1,
        titulo: inputNomeEl.value,
        nota: inputNotaEl.value,
        resenha: inputResenhaEl.value,
        imagem: inputURLEl.value,
        categoria: inputCategoriaEl.value
    };

    vetorFilmes.push(novoFilme);

    // fechar modal e limpar campos
    $('#janela-adicionar-filme').addClass('escondido');
    inputNomeEl.value = '';
    inputNotaEl.value = '';
    inputResenhaEl.value = '';
    inputURLEl.value = '';
    if (inputCategoriaEl) inputCategoriaEl.value = 'acao';

    // notifica outras partes da página para atualizarem a lista
    window.dispatchEvent(new CustomEvent('filmeAdicionado', { detail: novoFilme }));
});

function adicionaFilmesNaPagina(vetor){
    for (let i = 0; i < vetor.length; i++){
        let conteudo = `<img src="${vetor.url}" id="${vetor.id}">`;
        let novaImgEl 
    }
}

$('#sair').on("click", function(){
    $('#janela-adicionar-filme').toggleClass('escondido');
});

$('#salvar-lista').on("click", function(){
    localStorage.setItem('filmes', JSON.stringify(vetorFilmes))
})