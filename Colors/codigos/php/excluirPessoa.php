<?php
include_once("conexao.php");

//isset() verifica se foi setado algum valor para $_GET["idUser"]
if(isset($_GET["idUser"])){

    $idUser = $_GET["idUser"];
    
    $sql = "DELETE FROM usuario WHERE idUser = $idUser";

    if($conn->query($sql) === TRUE){
?>
        <script>
        alert("Registro excluido com sucesso.");
        window.location = "selecionarPessoa.php";
         </script>
    
     <?php

    } else{
    ?>
        <script>
            alert("Erro ao excluir o registro.");
            window.location = "selecionarPessoa.php";
        </script>
<?php

         }


    }

?>
