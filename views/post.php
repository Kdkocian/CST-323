<!DOCTYPE html>
<html>
	<head>
		<title>Add a Post</title>
        <link rel="stylesheet" type="text/css" href="../Resources/css/bootstrap.css"></link>
	</head>
    <body>
        <form action="../controllers/postManagement.php" method="POST">
            <input name="title" type="text" size="48"/><br/>
            <textarea name="content" rows="20" cols="50"></textarea><br/>
            <input name="submitPost" type="submit" value="Post"/>  
            <input type="button" value="View Posts" onclick="window.location.href='postview.php'"/>
			<input type="button" value ="To Search" onclick="window.location.href='searchpage.php'"/>
			<input type="button" value ="Log Out" onclick="window.location.href='../index.html'"/>
    	</form>
    </body>
</html>
