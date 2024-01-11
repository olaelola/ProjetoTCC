 <?php  session_start();   
   
   include_once("conexao.php");
   ?>



 <!DOCTYPE html>
 <html lang="pt-br">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
         integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="../css/ColorsStyle.css">
     <title>Editar informações</title>
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
                     <a class="nav-link" href="../html/inicio.html" style="color: rgb(190, 115, 65)">Início<span
                             class="sr-only">(current)</span></a>

                 </li>

             </ul>

         </div>
     </nav>

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
                                     </div>

                                     <?php
                                        /*if(isset($_GET["idUser"])){

                                            $idUser = $_GET["idUser"];
                                            echo $idUser;
                                            $sql = "SELECT * from usuario where idUser = $idUser";
                                            $consulta = $conn->query($sql);
                                            $usuario = $consulta->fetch_assoc();
                                        }*/
                                        //echo $_SESSION["idUser"];
                                       // $sql = "SELECT * from usuario where idUser = $_SESSION["idUser"]";
                                       // $consulta = $conn->query($sql);
                                       // $usuario = $consulta->fetch_assoc();
                                        
                                    ?> 



                                     <form action="atualizaUser.php?idUser=<?php echo $_SESSION["idUser"] ?>" 
                                         method="post">
                                         <div class="form-outline mb-4">
                                             <label for="nomeUser">Nome
                                                 <div class="col-sm-10">
                                                     <input type="text" class="form-control" name="nomeUser"
                                                     required placeholder="Digite seu nome">
                                                 </div>
                                         </div>

                                         <div class="form-group row">
                                             <label for="sobrenomeUser">Sobrenome
                                                 <div class="col-sm-10">
                                                     <input type="text" class="form-control" name="sobrenomeUser"
                                                         required placeholder="Digite seu sobrenome">
                                                 </div>
                                         </div>

                                         <div class="form-group row">
                                             <label for="telUser">Telefone
                                                 <div class="col-sm-10">
                                                     <input type="text" class="form-control" name="telUser"
                                                          required placeholder="Digite seu telefone">
                                                 </div>
                                         </div>

                                         <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                            
                                             <div class="text-right">
                                                <input type="submit" value="Salvar">                                                                                        
                                             </div>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 </selection>
 </body>

 </html>
