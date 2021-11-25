<?php

require_once 'conn.php';

$conn = connection();

$query = "SELECT * FROM tasks";
$stmt = $conn->prepare($query);
$stmt->execute();
$arr = $stmt->fetchAll();
