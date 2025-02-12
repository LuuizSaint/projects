<?php

$host = "localhost";
$dbname = "simple_system";
$user = "simple_sys_root";
$pass = "simple_sys_root";

try {
    $pdo = new PDO("mysql:host={$host};dbname={$dbname}",
    $user,
    $pass,
    [PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ]);
    
} catch (PDOException $th) {
    print_r($th->getMessage());
}
?>