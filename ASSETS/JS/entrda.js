function carregarFilmes() {
    $.ajax({
        url: "../PAGES/carregar.php",
        method: "GET",
        success: function(resposta) {

            let dados = JSON.parse(resposta);

            if (dados.length > 0) {

                vetorFilmes = dados;
            } 
            else {

                let controle = localStorage.getItem('filmes');

                if(controle == null){
                    localStorage.setItem('filmes', JSON.stringify(vetorFilmes));
                } else {
                    vetorFilmes = JSON.parse(controle);
                }


            }
            adicionaFilmesNaPagina(vetorFilmes);
            ativarClicks();
        }

    });


}


function montarLista(filmes) {

    filmes.forEach(f => {
        console.log("Filme:", f.nome, "Categoria:", f.categoria);
    });

}