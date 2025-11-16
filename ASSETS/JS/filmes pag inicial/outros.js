// Função para adicionar o click nas imgs
function adicionarEventosImagem() {
  document.querySelectorAll('.card-filme').forEach(img => {
    img.addEventListener('click', () => {
      const item = img.closest('.img-toggle');

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



let filmesdeoutros = document.querySelector("#acao")
fetch('ASSETS/DATA/outros.json').then((resposta) => {

  resposta.json().then((dados) =>
    dados.filmes.map((filme) => {
filmesdeoutros.innerHTML += `
      <article>
   <div class="conteudo-item">
     <img src="${filme.imagem}" alt="${filme.nome}" class ="img-dinamica"/>
     <p class="descricao-curta">${filme.descricaoCurta}</p>
    <div class="descricao-longa">
        <h4>Classificação Indicativa</h4>
        <p>${filme.idade}</p>
        <h5>Outros detalhes</h5>
        <p>${filme.detalhes}</p>
        <article>
      </div>
    </div>  
  `;
   adicionarEventosImagem()
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