<?php
require "connection.php";
$sql= 'SELECT * FROM student';
$statement= $connection->prepare($sql);
$statement -> execute();
$person= $statement->fetchAll(PDO::FETCH_OBJ);
require "header.php";
?>
<div class="container">
	<div class="card mt-4">
		<div class="card-header"><h2>Registered Students</h2></div>
		<div class="card-body">
           <table class="table table-bordered" >
			   <tr>
				   <th>ID</th>
				   <th>Firstname</th>
				   <th>Lastname</th>
                   <th>registration number</th>
                   <th>Password</th>
				   <th>ACTION</th></tr>
				   <?php foreach($person as $p): ?>
				   <tr>
                    <td><?=$p->id ;   ?></td>
					<td><?=$p->fname ;   ?></td>
					<td><?=$p->lname;   ?></td>
                    <td><?=$p->regno;   ?></td>
                    <td><?=$p->password;   ?></td>
					<td>
<a href="edit.php?id=<?=$p->id ; ?>" class="btn btn-info">update</a>
<a onclick="return confirm('are you sure you want to delete this entry')" 
href="delete1.php?id=<?=$p->id ;?>" class="btn btn-danger"> delete</a>
                   </td>
				   </tr>

	<?php endforeach; ?>
</table>
</div>
</div>
</div>
