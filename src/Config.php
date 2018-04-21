<?php declare(strict_types = 1);

#Database data

$host       = "localhost";
$username   = "root";
$password   = "3921";
$dbname     = "evaproject";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );

try {
    $connection = new PDO($dsn, $username, $password, $options);
} catch(PDOException $error) {
    echo $error->getMessage();
}

              
