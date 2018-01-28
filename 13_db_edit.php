<?php 
require 'config/Database.php';

$database = new Database;
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

if($post['submit']){
	$id = $post['id'];
	$title = $post['title'];
	$body = $post['body'];

	$database->query('UPDATE posts SET title = :title, body = :body WHERE id = :id');
	$database->bind(':title', $title);
	$database->bind(':body', $body);
	$database->bind(':id', $id);
	if($database->execute())
		echo "updated...";
}
 
$id=$_REQUEST['id'];
if($id)
{
	$database->query('SELECT * FROM posts WHERE id=:id');
	$database->bind(':id', $id);
	$rows = $database->resultset();
}


?>
<h1>Edit Post</h1> 
<a href="11_db_fetch.php">View</a>
<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>"> 
	<input type="hidden" name="id" value="<?php echo $rows[0]['id']; ?>"  /> 
	<label>Post Title</label><br />
	<input type="text" name="title" placeholder="Add a Title..." value="<?php echo $rows[0]['title']; ?>"/><br /><br />
	<label>Post Body</label><br />
	<textarea name="body"><?php echo $rows[0]['body']; ?></textarea><br /><br />
	<input type="submit" name="submit" value="Submit" />
</form>