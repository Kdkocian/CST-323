<!DOCTYPE html>
<html>
	<head>
		<meta charset="ISO-8859-1">
		<title>All Posts</title>
	</head>
	<body>
		<form action="../controllers/postManagement.php" method="POST">
		<?php 
		echo '<input name="title" type="text" value="'.$_GET['title'].'"size="48"><br/>';
		echo '<textarea name="content" rows="20" cols="50">'.$_GET['content'].'</textarea><br/>';
		echo '<input type="hidden" name="pid" value="'.$_GET['pid'].'"/>';
		?>
    	<input name="edit" type="submit" value="edit">
    	</form>
	</body>
</html>