<?php 
require 'config/Database.php';

$database = new Database;
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

if($post['submit']){ 
	$title = $post['title'];
	$body = $post['body'];

	$database->query('INSERT INTO posts (title, body) VALUES (:title, :body)');
	$database->bind(':title', $title);
	$database->bind(':body', $body); 
	$database->execute();
	 
	if($database->lastInsertId())
		echo 'Added...';
}
 
?>
<h1>Add Post</h1> 
<a href="11_db_fetch.php">View</a>
<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>"> 
	<label>Post Title</label><br />
	<input type="text" name="title" placeholder="Add a Title..." /><br /><br />
	<label>Post Body</label><br />
	<textarea name="body"></textarea><br /><br />
	<input type="submit" name="submit" value="Submit" />
</form>