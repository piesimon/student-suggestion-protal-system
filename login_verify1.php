<?php
 session_start();  
 $host = "localhost";  
 $username = "root";  
 $pass = "";  
 $database = "iprc_tumba";  
 $message = "";  
 try  
 {  
      $connect = new PDO("mysql:host=$host; dbname=$database", $username, $pass);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      if($connect)
      {
         // echo'success';
      }
     // $username = $_POST['username'];
   // $password = $_POST['password'];  
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["username"]) || empty($_POST["password"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM admin WHERE username = :username AND password = :password";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'username'     =>     $_POST["username"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["username"] = $_POST["username"];  
                     header("location:adminDashboard.php");  
                }  
                else  
                {  
                     $message = '<label>Wrong Data</label>'; 
                     echo'errro' ;
                }  
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?>