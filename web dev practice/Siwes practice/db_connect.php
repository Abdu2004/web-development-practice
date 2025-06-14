<?php
$host = 'localhost:3306';
$dbname = 'Anime_users';
$username = 'root';
$password = 'root';

try{
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Error: You are unable to connect to database!. " . $e->getMessage());
}