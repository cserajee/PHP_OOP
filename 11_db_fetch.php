<?php 
require 'config/Database.php';

$database = new Database;

$database->query('SELECT * FROM posts');
$rows = $database->resultset();
?>
<h1>Posts</h1>
<a href="12_db_insert.php">Add</a>
<div>
<?php foreach($rows as $row) : ?>
	<div>
		<h3><?php echo $row['title']; ?></h3>
		<p><?php echo $row['body']; ?></p> 
		<a href="13_db_edit.php?id=<?php echo $row['id']; ?>">Edit</a> | 
		<a href="14_db_delete.php?id=<?php echo $row['id']; ?>">Delete</a>
	</div>
<?php endforeach; ?>
</div>