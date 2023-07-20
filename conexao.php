<?php 
    $user = 'id20838177_ofece';
    $password = 'C0$taevarist0';
    $host = 'localhost';
    $database = 'id20838177_ofece';

    $mysql = new mysqli($host, $user, $password, $database);

    if($mysql->error){
        die('Falha ao conectar'); 
    }
?>