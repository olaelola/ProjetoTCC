<?php
include_once("conexao.php");

// Recebe os dados do formulário
$email = $_POST['emailUser'];
$password = $_POST['senhaUser'];

// Consulta SQL para verificar o login
$sql = "SELECT nomeUser,sobrenomeUser,telUser,nascimentoUser,idUser,emailUser FROM usuario WHERE emailUser = '$email' AND senhaUser = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    session_start();
    $row = $result->fetch_row();

    $_SESSION["nomeUser"] = $row[0];
    $_SESSION["sobrenomeUser"] = $row[1];
    $_SESSION["telUser"] = $row[2];
    $_SESSION["nascimentoUser"] = $row[3];
    $_SESSION["idUser"] = $row[4];
    $_SESSION["emailUser"] = $row[5];

    // Login bem-sucedido
    header("location: ../html/quizz.html");
    //echo "Login bem-sucedido. Bem-vindo,". $_SESSION["nomeUser"];
} else {
    // Login falhou
    header("location: ../html/loginFalhou.html");;
}

$conn->close();
?>
