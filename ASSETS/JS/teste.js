function criarfilme(itemData){
  const item = document.getElementsByTagName('article');
  item.classList.add('item');

  item.innerHTML= `
   <h2>${itemData.nome}</h2>
   <div class="conteudo-item">
     <img src="${itemData.imagem}" alt="${itemData.nome}" class ="img-dinamica"/>
     <p class="descricao-curta">${itemData.descricaoCurta}</p>
       <button class="btn-toggle">Ver mais</button>
    <div class="descricao-longa">
        <h3>Classificação Indicativa</h3>
        <p>${itemData.idade}</p>
        <h3>Outros detalhes</h3>
        <p>${itemData.detalhes}</p>
      </div>
    </div>  
  `;
  
  return item;


}


document.addEventListener("DOMContentLoaded", () => {

  const container = document.querySelector('lista-itens');
  const Input = document.getElementById('pesquisa')
  let dadosOriginais = [];

  //função pra atualizar a lista pela seleção do filtro
  function atualizarLista(filtro = ''){
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
        }
      });
    });
  }

   fetch('/Cinefilos-Anonimos-main/ASSETS/DATA/teste.json')
    .then(res => {
      if (!res.ok) {
        throw new Error('Erro ao carregar o JSON');
      }
      return res.json();
    })
    .then(dados => {
      dadosOriginais = dados;
      atualizarLista();
    })
    .catch(erro => {
      container.innerHTML = `<p>Erro ao carregar os dados.</p>`;
      console.error(erro);
    });

  // Evento do input de pesquisa
  pesquisaInput.addEventListener('input', () => {
    atualizarLista(pesquisaInput.value);
  });
  //Parei aq, nn sei como caminhar mais
  
