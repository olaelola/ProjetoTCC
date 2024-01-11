
<?php
session_start();
//include_once("conexao.php");

// Simulação de banco de dados para armazenar usuários e senhas
$users = array(
    'usuario1' => array('senha' => 'senha1'),
    'usuario2' => array('senha' => 'senha2')
);

// Simulação de banco de dados para armazenar códigos de redefinição de senha
$resetCodes = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['emailUser'];
    $codigo = $_POST['codigo'];
    $novaSenha = $_POST['novaSenha'];

    if (isset($users[$usuario]) && isset($resetCodes[$usuario]) && $resetCodes[$usuario] === $codigo) {
        // Atualizar a senha do usuário no banco de dados
        $users[$usuario]['senha'] = $novaSenha;

        // Limpar o código de redefinição de senha
        unset($resetCodes[$usuario]);

        echo "Senha redefinida com sucesso!";
    } else {
        echo "Código inválido ou expirado!";
    }
    //Ta sem o nosso html ainda
    //Tava "funcionando". Ele criava um novo usuario com o email normal e a senha nova, mexi começou a dar ruim
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefinir Senha</title>
</head>
<body>
    <h1>Redefinir Senha</h1>
    <form method="post" action="">
        <input type="text" name="usuario" value="<?php echo $_GET['usuario']; ?>">
        <input type="text" name="codigo" value="<?php echo $_GET['codigo']; ?>">
        <label for="novaSenha">Nova Senha:</label>
        <input type="password" id="novaSenha" name="novaSenha" required>
        <button type="submit">Redefinir Senha</button>
    </form>
</body>
</html>
