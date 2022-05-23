<!doctype html>
<html lang="en">
  <head>
    <title>Login Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
<br> <br><br><br>
<div class="container">
    <div class="card nt-5">
        <div class="card-header">
            <h2> Student Login</h2>
</div>
<div class="card-body">
<form method="post" action="login_verify2.php">
<div class="form-group">
        <label for="name">Registration number</label>
        <input type="text" name="regno" id="id" class="form-control" placeholder="Enter your Registration number">
</div>

<div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="id" class="form-control" placeholder="Enter your password">
</div>
<div class="form-group">
    <button type="submit"  class="btn btn-info" name="login"> Login</button>
    <button type="reset" class="btn btn-info" > Clear</button><br>
     Click here for new account: <a href="register.php">Signup</a>
</div>
</form>
</div>
</div>
</div>
