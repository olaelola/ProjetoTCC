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
  <title>Início</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#" style="color: rgb(190, 115, 65)">
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
          <a class="nav-link" href="#" style="color: rgb(190, 115, 65)"><span
              class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-display="static"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: rgb(190, 115, 65)">
            <?php 
            
            echo($_SESSION["nomeUser"]);
            //echo $_SESSION["nomeUser"]; ?>
          </a>
          <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="navbarDropdown">

            <h6 class="dropdown-header" style="color: rgb(190, 115, 65)">Já tem uma conta?</h6>
            <a class="dropdown-item" href="../php/perfilUSer.php" style="color: rgb(190, 115, 65)">Perfil</a>

          </div>

        </li>

      </ul>

    </div>
  </nav>

  <div class="carousel-item">
    <img src="..." alt="...">
    <div class="carousel-caption d-none d-md-block">
      <h5></h5>
      <p></p>
    </div>
  </div>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="../../Imagem/1.png"
          alt="First slide" width="700px 200px">
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="../../Imagem/2.png"
          alt="Second slide">
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="../../Imagem/3.png"
          alt="Third slide">
      </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!--cabou banner-->
  <br>
  <br>
  <p style="text-align: center; color: rgb(190, 115, 65); font-size: large;">Você tem uma cor de pele. Mas essa cor não
    é única. <br>Ela muda de acordo com o tempo lá fora ou aí dentro de você.<br>

    O Colors te ajuda a escolher as cores que mais combinam com o seu momento. <br>
    Venha fazer o teste!</p>
  <br>

  <h1 style="text-align: center; color: rgb(190, 115, 65);">Como descobrir meu tom?</h1>

  <nav>
    <ol style="color: rgb(190, 115, 65)">
      <li>O primeiro passo é realizar um breve cadastro para que possamos te conhecer melhor.</li>
      <li>Mas, caso já possua uma conta é só entrar nela e continuar de onde parou.</li>
      <li>Agora você poderá responder o nosso quizz para descobrir seu tom.</li>
      <li>Seja paciente e aguarde os resultados por alguns minutinhos.</li>
      <li>Pronto! Você encontrou o seu tom ideal.</li>
      <li>Não esqueça de nos avaliar.</li><br>
    </ol>
  </nav>

  <p style="text-align: center;">
    <a href="quizz.html" target="_blank" class="começar"><img src="../../Imagem/buttonc-removebg-preview.png"></a>
      <br>
      <br>
    </a>

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
      </div><!--Col Footer 1-->

      <div class="colfooter">
        <h3 class="titleFooter"> Contato</h3>
        <p style="color:rgb(190, 115, 65);"><i class="icon icon-mail"></i> colors@gmail.com </p>
        <p style="color:rgb(190, 115, 65)"><i class="icon icon-phone"></i> 31 90000-0000</p>
        <p style="color:rgb(190, 115, 65);"><i class="icon icon-whatsapp"></i> 31 90000-0000</p>
      </div><!--Col Footer 2-->

      <div class="colfooter">
        <h3 class="titleFooter"> Redes Sociais</h3>
        <div>
          <a href="https://www.instagram.com/co.colors_/" target="_blank" class="botao"><img src="../../Imagem/instagram (3).png"></a>
          <a href="#" class="botao"><img src="../../Imagem/linkedin.png"></a>
          <a href="#" class="botao"><img src="../../Imagem/youtube.png"></a>
          <a href="#" class="botao"><img src="../../Imagem/tiktok (1).png"></a>
        </div>

      </div><!--Col Footer 3-->

      <div class="clear"></div>
    </div><!--Contant-->

    <div class="main_footer_copy">
      <p class="m-b-footer" ; style="color: rgb(190, 115, 65)"> Colors Company - 2023, todos os direitos reservados.</p>
      <p class="by" ; style="color: rgb(190, 115, 65);"><i class="icon icon-heart-3"></i> Desenvolvido por: <a href="#"
          title="Heloá"><br>Heloá dos Santos, Lara Nogueira e Marcella Letícia</a></p>
    </div>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <!-- cabou cabeçalho-->

</body>

</html>
