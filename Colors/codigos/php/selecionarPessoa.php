<?php
    include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Lista de Pessoas</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/ColorsStyle.css">

    <style>
     table, th, td{
        borer: 1px solid black;
        border-collapse: collapse;
     }
    </style>

</head>
<body>
    <h2>Lista e pessoas cadastradas</h2>

    <?php
    //comando sql
    $sql = "SELECT * FROM usuario order by nomeUser";
    //executar o comando
    $dadosPessoa = $conn->query($sql);


     //se o numero de registros retornados for maior que 0
     if($dadosPessoa->num_rows > 0){
        ?>
<table class="table table-striped">
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Senha</th>
            <th>Sobrenome</th>
            <th>Nascimento</th>
            <th>Gênero</th>
            <th>Id</th>
            <th>Email</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
     <?php
      while($exibir = $dadosPessoa->fetch_assoc()){     
      ?>
    <tr>
        <td><?php echo $exibir["nomeUser"] ?></td>
        <td><?php echo $exibir["telUser"] ?></td>
        <td><?php echo $exibir["senhaUser"] ?></td>
        <td><?php echo $exibir["sobrenomeUser"] ?></td>
        <td><?php echo $exibir["nascimentoUser"] ?></td>
        <td><?php echo $exibir["generoUser"] ?></td>
        <td><?php echo $exibir["idUser"] ?></td>
        <td><?php echo $exibir["emailUser"] ?></td>
        <td><a href = "editarPessoa.php?idUser=<?php echo $exibir["idUser"] ?>"> Editar</a></td>

        <td><a href = "#" onclick="confirmarExclusao(
            '<?php echo $exibir["idUser"] ?>',
            '<?php echo $exibir["nomeUser"] ?>',
            '<?php echo $exibir["sobrenomeUser"] ?>')">Excluir</a>
        </td>


        <?php
            
            ?>
            <?php
            }
            ?>
        </table>
    <?php
    }
    ?>  
</body>
    <script>
        function confirmarExclusao(idUser, nomeUser, sobrenomeUser){
            if (window.confirm("Deseja realmente excluir o registro: \n" + idUser + " - " + nomeUser + " " + sobrenomeUser)){
                window.location = "excluirPessoa.php?idUser=" + idUser;
            }
        }
    </script>


</html>
