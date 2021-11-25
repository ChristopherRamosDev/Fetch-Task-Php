<?php

require_once 'conn.php';

$conn = connection();

$name = $_POST['nameTask'];
$type = $_POST['type'];
$desc = $_POST['desc'];

if ($name == "" || $type == "" || $desc == '') {
    echo json_encode('Ingresa todo');
} else {
    $query = "INSERT INTO tasks (`name`,`type`,`description`)VALUES(?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bindValue(1, $name);
    $stmt->bindValue(2, $type);
    $stmt->bindValue(3, $desc);
    $stmt->execute();
    $last = $conn->lastInsertId();
    $query2 = "SELECT * FROM tasks Where id = $last";
    $stmt2 = $conn->prepare($query2);
    $stmt2->execute();
    $arr = $stmt2->fetchAll();

    echo json_encode($arr);
}
