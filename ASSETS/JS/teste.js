let filmesdeacao = document.querySelector("#acao")
fetch('ASSETS/DATA/teste.json').then((resposta) => {

  resposta.json().then((dados) =>
    dados.filmes.map((filme) => {
      filmesdeacao.innerHTML += `
      <h2>AÇÃO<h2>
      <article>
   <div class="conteudo-item">
     <img src="${filme.imagem}" alt="${filme.nome}" class ="img-dinamica"/>
     <p class="descricao-curta">${filme.descricaoCurta}</p>
       <button class="btn-toggle">Ver mais</button>
    <div class="descricao-longa">
        <h4>Classificação Indicativa</h4>
        <p>${filme.idade}</p>
        <h5>Outros detalhes</h5>
        <p>${filme.detalhes}</p>
        <article>
      </div>
    </div>  
  `;
    })
  )
})



document.addEventListener("DOMContentLoaded", () => {

  const container = document.querySelector('lista-itens');
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



// Função para adicionar eventos nos botões "Ver mais"
function adicionarEventosBotoes() {
  document.querySelectorAll('.btn-toggle').forEach(botao => {
    botao.addEventListener('click', () => {
      const item = botao.closest('.item');

      if (item.classList.contains('expanded')) {
        item.classList.remove('expanded');
        botao.textContent = 'Ver mais';
      } else {
        // Fecha outros cards abertos (apenas um aberto por vez)
        document.querySelectorAll('.item.expanded').forEach(i => {
          i.classList.remove('expanded');
          i.querySelector('.btn-toggle').textContent = 'Ver mais';
        });
        // Abre esse card
        item.classList.add('expanded');
        botao.textContent = 'Fechar';
          // Abre esse card
          item.classList.add('expanded');
          botao.textContent = 'Fechar';
        }
      });
    });
  }

