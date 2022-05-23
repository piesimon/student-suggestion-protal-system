<?php
require "connection.php";
$sql= 'SELECT * FROM Ideas ORDER BY date_created DESC';
$statement= $connection->prepare($sql);
$statement -> execute();
$person= $statement->fetchAll(PDO::FETCH_OBJ);
require "header.php";
?>
<div class="container">
	<div class="card mt-4">
		<div class="card-header"><h2>All Students Ideas</h2></div>
		<div class="card-body">
           <table class="table table-bordered" width="100" >
			   <tr>
				   <th>ID</th>
				   <th>Sent From</th>
				   <th>Title </th>
				   <th>Suggestion </th>
                   <th>Date of Sent </th>
                   <th>Action</th></tr>
				   <?php foreach($person as $p): ?>
				   <tr>
                    <td><?=$p->id ;   ?></td>
					<td><?=$p->regno;   ?></td>
					<td><?=$p->title;   ?></td>
                    <td><?=$p->body;   ?></td>
                    <td><?=$p->date_created;   ?></td>
					<td>
<a href="view.php?id=<?=$p->id ; ?>" class="btn btn-info">view</a>
<a onclick="return confirm('Are you sure you want to delete this entry???')" 
href="delete.php?id=<?=$p->id ;?>" class="btn btn-danger"> Delete</a>
                   </td>
				   </tr>

	<?php endforeach; ?>
</table>
</div>
</div>
</div>
