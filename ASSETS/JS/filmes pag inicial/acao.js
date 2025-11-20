// Função para adicionar o click nas imgs
function addeventosimg_acao() {
  document.querySelectorAll('.img-dinamica').forEach(img => {
    img.addEventListener('click', (vetorJSON) => {

      const item = img.closest('.img-toggle');

      for (let i = 0; i < vetorJSON.length; i++){
        if (item.id === vetorJSON[i].id){
          let novaAba = document.createElement('div');
          let mainEl = document.querySelector('#main');
          novaAba.innerHTML = `<h2>${vetorJSON[i].titulo}</h2><button>X</button>
                              <div>
                                <h2>Nota:${vetorJSON[i].nota}</h2>
                                <h2>Resenha:${vetorJSON[i].resenha}
                              </div>`;
          mainEl.appendChild(novaAba);
        }
      }

      if (item.classList.contains('expanded')) {
        item.classList.remove('expanded');
      } else {
        // Fecha outros cards abertos (apenas um aberto por vez)
        document.querySelectorAll('.item.expanded').forEach(i => {
          i.classList.remove('expanded');
        });
        // Abre esse card
        item.classList.add('expanded');
        }
      });
    });
  }

let filmesdeacao = document.querySelector("#acao")
fetch('ASSETS/DATA/acao.json').then((resposta) => {

  resposta.json().then((dados) =>
    dados.filmes.map((filme) => {
    filmesdeacao.innerHTML += `
      <article>
          <div class="conteudo-item">
            <img id="${filme.id}" src="${filme.imagem}" alt="${filme.titulo}" class ="img-dinamica"/>
            <p class="descricao-curta">${filme.descricaoCurta}</p>
            <div class="descricao-longa">
                <h4>Classificação Indicativa</h4>
                <p>${filme.idade}</p>
                <h5>Outros detalhes</h5>
                <p>${filme.detalhes}</p>
              </div>
            </div>  
        </article>
   `;
    addeventosimg_acao(resposta);
    })
  )
})



document.addEventListener("DOMContentLoaded", () => {

  const container = document.querySelector('.lista-itens');
  const Input = document.getElementById('pesquisa')
  let dadosOriginais = [];

  //função pra atualizar a lista pela seleção do filtro
  function atualizarLista(filtro = '') {
    //limpa
    container.innerHTML = '';
    const filtroMinusculo = filtro.toLowerCase().trim();
    //filtra
    const dadosFiltrados = dadosOriginais.filter(item => {
      const nomeItemMinusculo = item.nome.toLowerCase();

      return nomeItemMinusculo.includes(filtroMinusculo);
    })
  }
})

let imagensEl = document.querySelectorAll('.img-filmes')

