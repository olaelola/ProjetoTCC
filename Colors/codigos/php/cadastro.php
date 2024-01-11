<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/ColorsStyle.css">
    <link rel="stylesheet" href="../css/CadastroStyle.css">
    <title>Cadastro de Pessoa</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#" style="color: rgb(190, 115, 65)">
            <img src="../../Imagem/logocabeçalho.png" width="60" height="50" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="mr-auto"></div>
            <ul class="navbar-nav my-2 my-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="../html/index.html" style="color: rgb(190, 115, 65)">Início<span
                            class="sr-only">(current)</span></a>

                </li>

            </ul>

        </div>
    </nav>

    <!-- Cadastro -->
    <section class="cadastro">
        <div class="section">
        <form action="processa_cadastro.php" method="post">
                <!-- lado A -->
                <fieldset class="ladoA">

                    <div class="text-center">
                        <img src="../../Imagem/userlog.png" style="width: 185px;" alt="logo">
                        <h4 class="mt-1 mb-5 pb-1" style="color: rgb(139, 85, 48);"></h4>
                    </div>

                    <div class="form-outline mb-4">
                        <label for="nomeUser">Nome</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nomeUser" required
                                placeholder="Digite seu nome">
                        </div>
                    </div>

                    <div class="form-outline mb-4">
                        <label for="sobrenomeUser">Sobrenome</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="sobrenomeUser" required
                                placeholder="Digite seu sobrenome">
                        </div>
                    </div>

                    <div class="form-outline mb-4">
                        <label for="telUser">Telefone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="telUser" required
                                placeholder="Digite seu telefone">
                        </div>
                    </div>

                    <div class="form-outline mb-4">
                        <label for="nascimentoUser">Nascimento</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="nascimentoUser" required
                                placeholder="Digite sua data de nascimento">
                        </div>
                        </label>
                    </div>


                    <div class="form-outline mb-4">
                        <label for="generoUser">Sexo</label>
                        <div class="col-sm-10">

                            <input class="btn tn-primary" type="radio" name="generoUser" value="1">Feminino
                            <input class="btn tn-primary" type="radio" name="generoUser" value="2">Masculino
                            <input class="btn tn-primary" type="radio" name="generoUser" value="0">Prefiro não dizer
                        </div>
                    </div>

                </fieldset>
                <!-- lado B  -->
                <fieldset class="ladoB">
                    <div class="form-outline mb-4">
                        <label for="emailUser">Email
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="emailUser" required
                                    placeholder="Digite seu email">
                            </div>
                    </div>

                    <div class="form-outline mb-4">
                        <label for="senhaUser">Senha
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="senhaUser" required
                                    placeholder="Digite sua senha">
                            </div>
                    </div>
                   
                    <div class="enviar text-right">
                        <input class="btn btn-light" type="submit" name="btnSalvar" value="Salvar" style="background-color: rgb(241, 234, 226); color: rgb(190, 115, 65); border-radius: 12px;"><br><br>
                        

                            </script>
                        <a href = "../inicio.html">

                    </div>
                    <div class="enviar text-right">
                        <a href="../html/login.html" title="Login" style="color: rgb(190, 115, 65);">Já tenho uma
                            conta</a>
                    </div>
                </fieldset>

            </form>




        </div>
    </section>

    <footer class="main_footer">
        <div class="content">
            <div class="colfooter">
                <h3 class="titleFooter"> Menu</h3>

                <ul>
                    <li><a href="#" title="Página Inícial">Página Inícial</a></li>
                    <li><a href="#" title="Sobre nós">Sobre nós</a></li>
                    <li><a href="#" title="Tutorial">Tutorial</a></li>
                    <li><a href="#" title="Fale Conosco">Fale Conosco</a></li>
                </ul>
            </div>
            <!--Col Footer 1-->

            <div class="colfooter">
                <h3 class="titleFooter"> Contato</h3>
                <p style="color:rgb(190, 115, 65);"><i class="icon icon-mail"></i> colors@gmail.com </p>
                <p style="color:rgb(190, 115, 65)"><i class="icon icon-phone"></i> 31 90000-0000</p>
                <p style="color:rgb(190, 115, 65);"><i class="icon icon-whatsapp"></i> 31 90000-0000</p>
            </div>
            <!--Col Footer 2-->

            <div class="colfooter">
                <h3 class="titleFooter"> Redes Sociais</h3>
                <div>
                    <a href="https://www.instagram.com/co.colors_/" target="_blank" class="botao"><img
                            src="../../Imagem/instagram (3).png"></a>
                    <a href="#" class="botao"><img src="../../Imagem/linkedin.png"></a>
                    <a href="#" class="botao"><img src="../../Imagem/youtube.png"></a>
                    <a href="#" class="botao"><img src="../../Imagem/tiktok (1).png"></a>
                </div>

            </div>
            <!--Col Footer 3-->

            <div class="clear"></div>
        </div>
        <!--Contant-->

        <div class="main_footer_copy">
            <p class="m-b-footer" ; style="color: rgb(190, 115, 65)"> Colors Company - 2023, todos os direitos
                reservados.</p>
            <p class="by" ; style="color: rgb(190, 115, 65);"><i class="icon icon-heart-3"></i> Desenvolvido por: <a
                    href="#" title="Heloá"><br>Heloá dos Santos, Lara Nogueira e Marcella Letícia</a></p>
        </div>
    </footer>
</body>

</html>
