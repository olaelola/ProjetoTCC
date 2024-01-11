<?php session_start(); ?>
<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/ColorsStyle.css">
    <title>Perfil </title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="../../Imagem/logocabeçalho.png" width="60" height="50" class="d-inline-block align-top" alt="">
        </a>
        <form class="form-inline  ">
            <input class="form-control mr-sm-2" type="Pesquisar" placeholder="Pesquisar" aria-label="Pesquisar">

        </form>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="mr-auto"></div>
            <ul class="navbar-nav my-2 my-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="inicioUser.html" style="color: rgb(190, 115, 65)">Início<span
                            class="sr-only">(current)</span></a>

                </li>
            </ul>

        </div>
    </nav>
    <!-- iniciou o box-->

    <section class="h-100 gradient-form" style="background-color: #ffffff;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 card-pricipal"
                                    style="background-color: rgb(241, 234, 226);">

                                    <div class="text-center">
                                        <img src="../../Imagem/userlog.png" style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1" style="color: rgb(139, 85, 48);"></h4>

                                        <h4 class="mb-4"><?php echo($_SESSION["nomeUser"]);?> </h4>
                                    </div>

                                    <form>


                                        <div class="form-outline mb-4">
                                            <label class="form-label">Alterar informações </label>
                                            <a href="editarPessoa.php?idUser=<?php echo $exibir["idUser"] ?>" target = "_blank" class="botao"><img src="../../Imagem/editarInfo.png"
                                                    width="12" height="12"></a>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label">Alterar Senha </label>
                                            <a href="..\ems.php" target="_blank" class="botao"><img src="../../Imagem/editarInfo.png" width="12" height="12"></a>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label">Meus itens salvos </label>
                                            <a href="#" target="_blank" class="botao"><img
                                                    src="../../Imagem/salvo.png" width="12" height="12"></a>
                                        </div>
                                        <label class="form-label">Sair </label>
                                        <a href="..\html\inicioUser.php" target="_blank" class="botao"><img
                                                src="../../Imagem/sair.png" width="12" height="12"></a>
                                </div>
                                <p style="text-align: center;">




                                    </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>
    <!-- cabou cadastro-->

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

            <div class="colfooter" style="color: rgb(190, 115, 65);">
                <h3 class="titleFooter"> Contato</h3>
                <p style="color: rgb(190, 115, 65);"><i class="icon icon-mail"></i> colors@gmail.com </p>
                <p style="color: rgb(190, 115, 65);"><i class="icon icon-phone"></i> 31 90000-0000</p>
                <p style="color: rgb(190, 115, 65);"><i class="icon icon-whatsapp"></i> 31 90000-0000</p>
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
            <p class="m-b-footer" ; style="color: rgb(190, 115, 65);"> Colors Company - 2023, todos os direitos
                reservados.</p>
            <p class="by" style="color: rgb(190, 115, 65);">Desenvolvido por: <a href="#" title="Heloá"><br>Heloá dos
                    Santos, Lara Nogueira e Marcella Letícia</a></p>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!-- cabou cabeçalho-->
