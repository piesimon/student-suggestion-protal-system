<?php
require 'connection.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM student WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id'=> $id]);
$person = $statement->fetch(PDO::FETCH_OBJ);
if(isset ($_POST['fname']) && isset($_POST['lname']) && isset($_POST['regno']) && isset($_POST['password'])){
    $fname= $_POST['lname'];
    $lname= $_POST['fname'];
    $regno =$_POST['regno'];
    $password =$_POST['password'];
	$sql= 'UPDATE student SET fname=:fname, lname=:lname,regno=:regno,password=:password WHERE id=:id';
	$statement = $connection-> prepare($sql);
	if($statement->execute([$fname,$lname,$regno,$password ,$id]))
	{
		header('location:viewStudent.php');
	}
}
?>
<?php require 'header.php'; ?>
<div class="container">
<div class="card mt-5">
	<div class="card-header">
		<h2>Update Student   </h2>
</div>
<div class="card-body"	>
	<?php if(!empty($message)): ?>
		<div class="alert alert-success">
			<?=$message ?>
	</div>
	<?php endif; ?>
	<form method="post">
		<div class="form-group">
			<label for="name"> Firstname</label>
			<input value="<?= $person->fname; ?>" type="text" name="fname" id="name" class="form-control">
	</div>
	<div class="form-group">
			<label for="email">Lastname</label>
<input value="<?= $person->lname; ?>" type="text" name="lname" id="fname" class="form-control">
	</div>
	<div class="form-group">
			<label for="email">Registration number</label>
<input value="<?= $person->regno; ?>" type="text" name="regno" id="email" class="form-control">
	</div>
	<div class="form-group">
			<label for="email">Password</label>
<input value="<?= $person->password; ?>" type="text" name="password" id="email" class="form-control">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-info">update student</button>
		<a href="viewStudent.php"  class="btn btn-info">back</a>
	</div>
	</form>
	</div>
	</div>
	</div>
