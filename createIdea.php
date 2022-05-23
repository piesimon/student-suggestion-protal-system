<?php
require 'connection.php';
$message ='';
if(isset($_POST['regno']) && isset($_POST['title']) && isset($_POST['body'])){
    $regno= $_POST['regno'];
    
    $title= $_POST['title'];
    $body =$_POST['body'];
    $sql ='INSERT INTO Ideas(regno, title,body) VALUES(:regno, :title,:body)';
    $statement =$connection->prepare($sql);
    if($statement->execute([$regno,$title,$body]))
        {
            $message="your idea are submitted successful";
        }
}
?>
<?php require 'header4.php'; ?>
<div class="container">
    <div class="card nt-5">
        <div class="card-header">
            <h2> Create your suggestion here!</h2>
</div>
<div class="card-body">
    <?php if(!empty($message)); ?>
    <div class="alert alert-success">
        <?= $message; ?>
</div>
<?php //endif; ?>
<form method="post">
    <div class="form-group">
        <label for="name">Registration number</label>
        <input type="text" name="regno" id="id" class="form-control" placeholder="registration number">
</div>
<div class="form-group">
        <label for="name">Title</label>
        <input type="text" name="title" id="id" class="form-control" placeholder="title">
</div>
<div class="form-group">
        <label for="name">Your suggessetion</label>
        <textarea type="text" name="body" id="id" class="form-control" placeholder="your idea"></textarea>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-info"> register</button>
</div>
</form>
</div>
</div>
</div>

