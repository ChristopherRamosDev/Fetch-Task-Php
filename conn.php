<?php


 function connection(){
    $driver = "mysql";
    $host = "localhost";
    $database = "taskapp";
    $port = "3306";
    $user = "root";
    $pass = "";
    $url = "{$driver}:host={$host};dbname={$database};port={$port}";
    $options = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ];
    $conn = new PDO($url,$user,$pass,$options);
    return $conn;
}
