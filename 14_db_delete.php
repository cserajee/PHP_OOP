<?php 
require 'config/Database.php';

$database = new Database;
$id=$_REQUEST['id'];
if($id)
{
	$database->query('DELETE FROM posts WHERE id=:id');
	$database->bind(':id', $id);
	if($database->execute())
	{
		header("location:11_db_fetch.php");
	}

}


?>
 