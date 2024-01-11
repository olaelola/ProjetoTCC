    <?php
    define('HOST', 'localhost:3307');
    define('USER', 'root');
    define('PASSWORD', '');
    define('DB', 'colors');

    $conn = new mysqli(HOST, USER, PASSWORD, DB);

    if($conn -> connect_error){
        die("Falha na conexão com BD: " . $conn->conect_error);
    //}else{
        //echo 'Conexão realizada com sucesso.';
    }
    
?>