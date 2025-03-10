<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servant</title>
    <link rel="stylesheet" href="./css/cadastro.css">
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

            <form action="resposta.php" method="post">
                <fieldset>
                    <legend>
                        <h1 class="primary-text">Cadastro do Aluno</h1>
                    </legend><br>
                    <div class="inputbox">
                        <input type="text" name="nome" id="nome" class="inputUser" required>
                        <label for="nome" class="labelinput">Nome</label>
                    </div><br>
                    <div class="inputbox">
                        <input type="text" name="lastaname" id="lastname" class="inputUser" required>
                        <label for="lastname" class="labelinput">Sobrenome</label>
                    </div><br>
                    <div class="inputbox">
                        <input type="email" name="email" id="email" class="inputUser" required>
                        <label for="email" class="labelinput">E-mail</label>
                    </div><br>
                    <div class="inputbox">
                        <input type="tel" name="tel" id="tel" class="inputUser">
                        <label for="tel" class="labelinput">Telefone</label>
                    </div><br>
                    <p>Sexo:</p>
                    <input type="radio" name="genero" id="feminino" value="feminino" required>
                    <label for="feminino">Feminino</label><br>
                    <input type="radio" name="genero" id="masculino" value="masculino" required>
                    <label for="masculino">Masculino</label><br>
                    <input type="radio" name="genero" id="outro" value="outro" required>
                    <label for="outro">Outro</label><br>

                    <div class="inputbox">
                        <br><label for="data_nascimento">Data de nascimento</label>
                        <input type="date" name="data_nascimento" id="data_nascimento" required><br>



                    </div><br>
                    <div class="inputbox">
                        <input type="number" step="0.01" name="peso" id="peso" class="inputUser" required><br>
                        <label for="peso" class="labelinput">Peso</label><br>
                    </div><br>
                    <div class="inputbox">
                        <input type="number" step="0.01" name="altura" id="altura" class="inputUser" required><br>
                        <label for="altura" class="labelinput">Altura</label>
                    </div><br>


                    <div class="inputbox">
                        <input type="text" name="adress" id="adress" class="inputUser" required>
                        <label for="adress" class="labelinput">Endereço</label>
                    </div><br>
                    <div class="inputbox">
                        <input type="number" name="number" id="number" class="inputUser" required>
                        <label for="number" class="labelinput">N°</label>
                    </div><br>
                    <div class="inputbox">
                        <input type="text" id="complemento" name="complemento" class="inputUser" required>
                        <label for="complemento" class="labelinput">Complemento</label>
                    </div><br>
                    <div class="inputbox">
                        <input type="text" id="cidade" name="cidade" class="inputUser" required>
                        <label for="cidade" class="labelinput">Cidade</label>
                    </div><br>
                    <div class="inputbox">
                        <input type="text" id="estado" name="estado" class="inputUser" required>
                        <label for="estado" class="labelinput">Estado</label>
                    </div><br>
                    <div class="inputbox">
                        <input type="number" name="cep" id="cep" class="inputUser" required>
                        <label for="cep" class="labelinput">CEP</label>
                    </div><br>
                    <div class="inputbox">
                        <form action="./post=true" method="post" name="post" enctype="multipart/form-data" required>
                            <input type="file" name="file" id="file" class="inputUser">

                        </form>
                    </div><br>
                    <div class="inputbox">
                        <input type="datetime-local" name="datalocal" id="datalocal" required>
                        <label for="datalocal">Data e local</label>

                    </div><br>
                    <input type="submit" value="Enviar" id="enviar" class="btns">



                </fieldset>


            </form>
        </div>


    </main>
    <footer>
        <a href="https://github.com/RosaCL"><img class="consti" src="./img/costureza.png" alt=""></a>
    </footer>

</body>

</html>