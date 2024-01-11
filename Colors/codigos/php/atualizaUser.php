<?php
//incluir o arquivo de conexao com o bd
 include_once("conexao.php");
 session_start();

$userId= $_GET['idUser'];

//receber os dados do formulário
  $nome = $_POST["nomeUser"];
  $sobrenome = $_POST["sobrenomeUser"];
  $telefone = $_POST["telUser"];
 


//inserir os dados no banco de dados

                        //$row = $result->fetch_row();
                          $sql = "UPDATE usuario SET  nomeUser = '$nome', sobrenomeUser ='$sobrenome', telUser = '$telefone' WHERE idUser = '$userId';";

                          if($conn->query($sql) === TRUE){
                            ?>
                            <?php session_abort()?>
                            
                            <script> alert("Dados inseridos com sucesso!");</script>
                            
                            <?php
                            header("location: editarPessoa.php");
                           
                          } else {
                            echo ( "Erro ao inserir dados: " . $conn->error);
                           
                          }
                          
                        
                        
 
  $conn->close();

  ?>
