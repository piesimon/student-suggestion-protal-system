
<?php
require 'connection.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM Ideas WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id'=> $id]);
$person = $statement->fetch(PDO::FETCH_OBJ);
?>
<?php require 'header.php'; ?>
<div class="container">
<div class="card mt-5">
	<div class="card-header">
		<h2> View  </h2>
</div>
<div class="card-body"	>
	<?php if(!empty($message)): ?>
		<div class="alert alert-success">
			<?=$message ?>
	</div>
	<?php endif; ?>
	<form method="post">
		<div class="form-group">
			<label for=""> Sent From</label>
			<input value="<?= $person->regno; ?>" type="text" name="name" id="name" class="form-control" readonly>
	</div>
	<div class="form-group">
			<label for=""> Title</label>
<input value="<?= $person->title; ?>" type="text" name="email" id="email" class="form-control" readonly>
	</div>
    <div class="form-group">
			<label for=""> Body</label>
<textarea value="" type="text" name="email" id="email" class="form-control" readonly><?= $person->body; ?></textarea>
	</div>
    <div class="form-group">
			<label for=""> Date Sent</label>
<input value="<?= $person->date_created; ?>" type="text" name="email" id="email" class="form-control" readonly>
	</div>
	
	</form>
	</div>
	</div>
	</div>
