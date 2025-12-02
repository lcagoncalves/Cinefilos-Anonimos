
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="../ASSETS/CSS/login.css">
    <link rel="icon" href="../ASSETS/IMAGENS/icon.imagem.jpg">
</head>
<body>
    <header>
    <h1>CINÉFILOS ANÔNIMOS</h1>
    </header>
    <main>

             <h2 id="login">LOGIN</h1>
        
    <form action="location.php" method="POST">

    <section id="cadastro"> 

        <label for="Digite seu E-mail"></label>
        <input type="email" id="email" name="email" required placeholder="Digite seu E-mail"> <br>


         <label for="Digite sua senha"></label>
        <input type="password" id="senha" name="senha" required placeholder="Digite sua senha"> <br>
        <p>minimo de 8 caracteres, sem espaço</p>
    </section>

    <section id="botao">
    <button type="submit" name="submit" >Confirmar</button>
    </section>
    </form>


    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    </main>
</body>
</html>