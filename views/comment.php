<html>
    <head>
    	<title>Comment</title>
    </head>
    <body>
    	<form action='../controllers/commenthandler.php' method='Post'>
    		<?php 
    		echo "<input type='hidden' name = 'postID' value='".$_GET['pid']."'>";
    		?>
    		<textarea name='comment_content'></textarea><br/>
    		<input type='submit' name='submitform' value='Comment'>
    	</form>
    </body>
</html>