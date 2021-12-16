<?php
function conectarMySQL(
    $schema = 'test',
    $usu = 'root',
    $pwd = '',
    $host = '127.0.0.1'
    ) {
        try {
            $dsn = "mysql:host=$host;dbname=$schema";
            //al crear este objeto se crea la conexión
            $db = new PDO($dsn, $usu, $pwd);
        }
        catch (PDOException $e) {
            print ("ERROR de conexión a $schema");
            die();
        }
        return $db;
}
?>
