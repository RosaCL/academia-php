<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servant</title>
    <link rel="stylesheet" href="./css/imc.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Days+One&family=Gugi&family=Quicksand:wght@300..700&family=Road+Rage&family=Sigmar&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
    <header>

        <div class="menu-content">
            <img class="logoimg" src="./img/image_1-removebg-preview.png" alt="">
            <nav class="headermenu">
                <ul class="list-itens">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="plano.html">Planos</a></li>
                    <li><a href="imc.php">Calcule seu IMC</a></li>
                    <li><a href="cadastro.php">Cadastro</a></li>
                    <li><a href="contato.html"><img class="socialmedia" src="./img/redes-sociais.png" alt=""></a></li>
                    <li><a href="sobrenos.html">Sobre Nós</a></li>
                </ul>


            </nav>
        </div>



    </header>
    <main>
        <div class="maincontent">
            <h1 class="primary-text">Malhar é questão de saúde física e mental</h1>
            <h2 class="second-text">
                SE INSCREVA AGORA E MUDE DE VIDA
            </h2>
            <fieldset>
                <legend>
                    <h1 class="primary-text">Calcule seu IMC</h1>
                </legend>
                <form action="imcresposta.php" method="post">
                    <div class="inputbox">
                        <input type="number" step="0.01" name="peso" id="peso" class="inputUser" required><br>
                        <label for="peso" class="labelinput">Peso</label><br>
                    </div><br>
                    <div class="inputbox">
                        <input type="number" step="0.01" name="altura" id="altura" class="inputUser" required><br>
                        <label for="altura" class="labelinput">Altura</label>
                    </div><br>

                    <input type="submit" value="Enviar" id="enviar" class="btns">
                </form>
            </fieldset>

        </div>





    </main>
    <footer>
        <a href="https://github.com/RosaCL"><img class="consti" src="./img/costureza.png" alt=""></a>
    </footer>


</body>

</html>