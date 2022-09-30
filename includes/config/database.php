
<?php 
// Script data base
function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', 'root', 'user_test');

    if(!$db) {
        echo "Error no se pudo conectar";
        exit;
    } 

    return $db;
    
}