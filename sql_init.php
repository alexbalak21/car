<?php
global $pdo;
$pdo = null;

// CONNECT TO MySQL and DATABASE
function db_connect()
{
    global $pdo;
    $pdo = null;
    $servername = "localhost";
    $email = "admin";
    $password = "root";
    $db_name = "test";

    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$db_name", $email, $password);
        // set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

function create_table_users()
{
    db_connect();
    global $pdo;
    $sql = "CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50) NOT NULL UNIQUE,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    phone VARCHAR(25) NOT NULL,
    password VARCHAR(255) NOT NULL,
    img VARCHAR(255) NOT NULL DEFAULT 'profile.png',
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    $pdo->exec($sql);
    echo "TABLE USERS CREATED SUCCESSFULLY";
    $pdo = null;
}

create_table_users();
