<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head><br><br>
<?php
require 'connection.php';
$message ='';
if(isset ($_POST['fname']) && isset($_POST['lname']) && isset($_POST['regno']) && isset($_POST['password'])){
    $fname= $_POST['lname'];
    $lname= $_POST['fname'];
    $regno =$_POST['regno'];
    $password =$_POST['password'];
    $sql ='INSERT INTO student(fname, lname,regno,password) VALUES(:fname, :lname,:regno,:password)';
    $statement =$connection->prepare($sql);
    if($statement->execute([$lname,$fname,$regno,$password]))
        {
            $message="Signup Secced!! Please Login to continue...";
        }
}
?>

<div class="container">
    <div class="card nt-5">
        <div class="card-header">
            <h2> Sign up here!</h2>
</div>
<div class="card-body">
    <?php if(!empty($message)); ?>
    <div class="alert alert-success">
        <?= $message; ?>
</div>
<?php //endif; ?>
<form method="post">
    <div class="form-group">
        <label for="name">Firstname</label>
        <input type="text" name="fname" id="id" class="form-control" placeholder="firstname">
</div>
<div class="form-group">
        <label for="name">Lastname</label>
        <input type="text" name="lname" id="id" class="form-control" placeholder="lastname">
</div>
<div class="form-group">
        <label for="name">Registration number</label>
        <input type="text" name="regno" id="id" class="form-control" placeholder="registration number">
</div>
<div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="id" class="form-control" placeholder="password">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-info"> Signup</button>
    <a href="student_login_page.php" class="btn btn-info">Back</a>
</div>
</form>
</div>
</div>
</div>

