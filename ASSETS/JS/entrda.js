function salvarFilme(filme) {

    $.ajax({
        url: "../PAGES/salvar.php",
        method: "POST",
        data: JSON.stringify(filme),
        contentType: "application/json",

        success: function(res) {

            console.log("Resposta do servidor:", res);
        },

        error: function() {
            console.log("Erro ao salvar.");
        }
    });

}

function carregarFilmes() {

    $.ajax({
        url: "../PAGES/carregar.php",
        method: "GET",
        dataType: "json",

        success: function(filmes) {
            console.log("Filmes carregados:", filmes);
            montarLista(filmes);
        },

        error: function() {
            console.log("Erro ao carregar filmes.");
        }
    });

}

function montarLista(filmes) {

    filmes.forEach(f => {
        console.log("Filme:", f.nome, "Categoria:", f.categoria);
    });

}