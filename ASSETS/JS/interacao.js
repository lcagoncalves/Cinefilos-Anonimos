let vetorFilmes = [];

let inputNomeEl = document.querySelector('#input-nome-filme');
let inputNotaEl = document.querySelector('#input-nota-filme');
let inputResenhaEl = document.querySelector('#input-resenha-filme');
let inputURLEl = document.querySelector('#input-url-filme');
let inputCategoriaEl = document.querySelector('#input-categoria-filme');
let carregarEl = document.querySelector('#carregar');
let categoriaFavoritos = document.querySelector('#favoritos');
let categoriaAcao = document.querySelector('#acao');
let categoriaComedia = document.querySelector('#comedia');
let categoriaAventura = document.querySelector('#aventura');
let categoriaRomance = document.querySelector('#romance')
let categoriaFantasia = document.querySelector('#fantasia');
let categoriaOutros = document.querySelector('#outros');
let imagemPreview = document.querySelector('#preview-imagem');
let tituloDadosEl = document.querySelector('#dados-titulo');

let teste = document.querySelectorAll('section');


inputURLEl.addEventListener("change", function(){
    imagemPreview.src = inputURLEl.value;
})

$('#menu-burguer').on("click", function(){
    $('#menu').toggleClass('escondido');
});

$('#adicionar-filme').on("click", function(){
    $('#janela-adicionar-filme').toggleClass('escondido');
});

$('#salvar').on("click", function(){

    const novoFilme = {
        id: vetorFilmes.length - 1,
        titulo: inputNomeEl.value,
        nota: inputNotaEl.value,
        resenha: inputResenhaEl.value,
        url: inputURLEl.value,
        categoria: inputCategoriaEl.value
    };

    vetorFilmes.push(novoFilme);

    // fechar modal e limpar campos
    $('#janela-adicionar-filme').addClass('escondido');
    inputNomeEl.value = '';
    inputNotaEl.value = '';
    inputResenhaEl.value = '';
    inputURLEl.value = '';

    adicionaFilmesNaPagina(vetorFilmes);

    // notifica outras partes da página para atualizarem a lista
    window.dispatchEvent(new CustomEvent('filmeAdicionado', { detail: novoFilme }));
});

function adicionaFilmesNaPagina(vetor){

    categoriaAcao.innerHTML = "<h2>AÇÃO</h2>";
    categoriaAventura.innerHTML = "<h2>AVENTURA</h2>";
    categoriaFavoritos.innerHTML = "<h2>FAVORITOS</h2>";
    categoriaFantasia.innerHTML = "<h2>FANTASIA</h2>";
    categoriaComedia.innerHTML = "<h2>COMÉDIA</h2>";
    categoriaRomance.innerHTML = "<h2>ROMANCE</h2>";
    categoriaOutros.innerHTML = "<h2>OUTROS</h2>";

    for (let i = 0; i < vetor.length; i++){
        let conteudo = `<img src="${vetor[i].url}" class="imagem-filme" id="${vetor[i].id}">`;
        let novoFilmeEl = document.createElement('article');  
        novoFilmeEl.innerHTML = conteudo;
        
        if(vetor[i].categoria == 'favoritos'){
            categoriaFavoritos.appendChild(novoFilmeEl);
        } else if(vetor[i].categoria == 'acao'){
            categoriaAcao.appendChild(novoFilmeEl);
        } else if(vetor[i].categoria == 'aventura'){
            categoriaAventura.appendChild(novoFilmeEl);
        } else if(vetor[i].categoria == 'comedia'){
            categoriaComedia.appendChild(novoFilmeEl);
        } else if(vetor[i].categoria == 'romance'){
            categoriaRomance.appendChild(novoFilmeEl);
        } else if(vetor[i].categoria == 'fantasia'){
            categoriaRomance.appendChild(novoFilmeEl);
        } else if(vetor[i].categoria == 'outros'){
            categoriaRomance.appendChild(novoFilmeEl);
        }
    }
}

$('#sair').on("click", function(){
    $('#janela-adicionar-filme').toggleClass('escondido');
    inputNomeEl.value = '';
    inputNotaEl.value = '';
    inputResenhaEl.value = '';
    inputURLEl.value = '';
});

$('#salvar-lista').on("click", function(){
    localStorage.setItem('filmes', JSON.stringify(vetorFilmes))
    let imagensFilmesEl = document.querySelectorAll('.imagem-filme');
    console.log(imagensFilmesEl)
})

$('#carregar').on("click",function(){
    vetorFilmes = localStorage.getItem('filmes');
    vetorFilmes = JSON.parse(vetorFilmes)

    adicionaFilmesNaPagina(vetorFilmes)
    
})

for (let imagemEl of imagensFilmesEl) {
    imagemEl.addEventListener('click', function(){
    
    })
}