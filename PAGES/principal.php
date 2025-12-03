<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinéfilos Anônimos</title>

    <link rel="stylesheet" href="../ASSETS/CSS/index.css">
    <link rel="icon" href="../ASSETS/IMAGENS/icon.imagem.jpg">
</head>

<body>
    <header>
        <h1 id="titulo">CINÉFILOS ANÔNIMOS</h1>
        <button id="menu-burguer">☰</button>
    </header>
    <main id="main">
        <!--me cagando de medo de selecionar com a tag e cair com um vetor, coloquei um id para facilitar a vida-->
        <section id="favoritos">
            <h2>FAVORITOS</h2>
            <div id="filmes-favoritos"></div>
        </section>
        <section id="acao">
            <h2>AÇÃO</h2>
            <div id="filmes-acao"></div>
        </section>
        <section id="comedia">
            <h2>COMÉDIA</h2>
            <div id="filmes-comedia"></div>
        </section>
        <section id="aventura">
            <h2>AVENTURA</h2>
            <div id="filmes-aventura"></div>
        </section>
        <section id="romance">
            <h2>ROMANCE</h2>
            <div id="filmes-romance"></div>
        </section>
        <section id="fantasia">
            <h2>FANTASIA</h2>
            <div id="filmes-fantasia"></div>
        </section>
        <section id="outros">
            <h2>OUTROS</h2>
            <div id="filmes-outros"></div>
        </section>
        <section id="sugestoes">
            <h2>SUGESTÕES</h2>
            <div id="filmes-sugestoes"></div>
        </section>
        <div class="escondido" id="menu">
            <ul>
                <li><button id="adicionar-filme">Adicionar filme à lista</button></li>
                <li><button id="info">Informações</button></li>
            </ul>
        </div>
        <div class="escondido" id="janela-adicionar-filme">
            <section>
                <h2>ADICIONAR FILME</h2>
                <button id="sair"><strong>X</strong></button>
            </section>
            <section>
                <article>
                    <h3>Nome do filme:</h3>
                    <input type="text" id="input-nome-filme">
                    <h3>Nota</h3>
                    <input type="number" id="input-nota-filme">
                    <h3>Comentário/resenha:</h3>
                    <input type="text" id="input-resenha-filme">
                </article>
                <article>
                    <h3>Categoria</h3>
                    <select id="input-categoria-filme">
                        <option value="favoritos">Favoritos</option>
                        <option value="acao">Ação</option>
                        <option value="comedia">Comédia</option>
                        <option value="aventura">Aventura</option>
                        <option value="romance">Romance</option>
                        <option value="fantasia">Fantasia</option>
                        <option value="outros">Outros</option>
                    </select>
                </article>
                <article id="imagem-do-filme">
                    <img id="preview-imagem" src="" alt="">
                    <input id="input-url-filme" type="text" placeholder="Insira a URL da imagem">
                </article>
            </section>
            <button id="salvar">Salvar filme</button>
        </div>
        <div id="dados-do-filme" class="escondido">
            <section>
                <h2 id="dados-titulo">TITULO TESTE</h2>
                <button id="sair-dados">X</button>
            </section>
            <section>
                <article>
                    <h3>Nota:</h3>
                    <p id="sessao-nota"></p>
                    <h3>Comentário/resenha:</h3>
                    <p id="sessao-resenha"></p>
                </article>
                <article>
                    <img id="imagem-detalhes" src="" alt="">
                </article>
            </section>
        </div>
        <div id="janela-info" class="escondido">
            <section>
                <h2>INFORMAÇÕES</h2>
                <button id="sair-info">X</button>
            </section>
            <section>
                <article>
                    <h3>Uso:</h3>
                    <ul>
                        <li>Adicione filmes a lista através do menu que pode ser encontrado ao abrir o navegador</li>
                        <li>Sua lista salva automaticamente</li>
                        <li>Organize seus filmes!</li>
                    </ul>
                </article>
                <article>
                    <h3>Autores:</h3>
                    <ul>
                        <li>Júlia Marília</li>
                        <li>Gabriel Marcucci</li>
                        <li>Laura Cavalcanti</li>
                        <li>Letícia Helena</li>
                    </ul>

                </article>
            </section>
        </div>
    </main>
    <footer>
        <p>
            Feito pelos alunos de Laboratório de Programação Web do CEFET-MG
        </p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="../ASSETS/JS/interacao.js"></script>
    <script src="../ASSETS/JS/entrda.js"></script>
</body>
</body>
</body>

</html>
