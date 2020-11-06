<?php
$servername = 'localhost';
$username = 'default';
$password = '1230';
$dbname = 'users';



try{
    $conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo 'db conn successful';
    
}catch(PDOException $e){
    echo "DB conn failed".$e->getMessage();
}

//$sql = "CREATE TABLE users (
    //id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //username VARCHAR(30) NOT NULL,
    //password VARCHAR(30) NOT NULL,
    //fname VARCHAR (30) NOT NULL,
    //lname VARCHAR (30) NOT NULL,
    //email VARCHAR (50) NOT NULL,
    //address VARCHAR (100) NOT NULL,
    //phone INT(10) DEFAULT NULL,
    

//)"



/* possible users.sql
 * 
 * DROP DATABASE IF EXISTS users;
 * CREATE DATABASE IF NOT EXISTS users;
 * USE employees;
 * 
 * SELECT 'CREATING DATABASE STRUCTURE' as 'INFO';
 * 
 * DROP TABLE IF EXISTS user,
 *                      users;
 * CREATE TABLE user(
 * userid INT auto_increment
 * )
 */

     
?>