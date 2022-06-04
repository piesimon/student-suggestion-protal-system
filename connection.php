<?php
$host = 'localhost';
$db   = 'iprc_tumba';
$user ='root';
$pass ='';

$dsn = "mysql:host=$host;dbname=$db";

try{
    $connection = new PDO($dsn, $user, $pass);
    if($connection)
    {
      echo"connection successful";
    }
}
catch(PDOexception $e)
{
    throw new PDOexception($e->getMessage(), (int)$e->getCode());
} 
