<?php
    // Conexão com a DB
    function conectar(){
        $servidor = 'localhost';
        $user = 'mamp';
        $password = 'black';
        $db = 'ispifood';

        $con = new mysqli($servidor, $user, $password, $db);
        return $con;
    }
    
    $conexao = conectar();
?>