<?php
$server = 'localhost';
$username = 'root';
$password = 'manish1876';
$database = 'manish';

try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}
