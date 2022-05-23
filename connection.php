<?php
$host = '127.0.0.1';
$db   = 'iprc_tumba';
$user ='root';
$pass ='';
$charset= 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$option =[
PDO::ATTR_ERRMODE             => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_ASSOC,
PDO::ATTR_EMULATE_PREPARES    =>false ,];

try{
    $connection = new PDO($dsn, $user, $pass, $option);
    if($connection)
    {
      //  echo"connection successful";
    }
}
catch(PDOexception $e)
{
    throw new PDOexception($e->getMessage(), (int)$e->getCode());
} 