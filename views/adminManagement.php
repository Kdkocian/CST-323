<?php
    require_once '../db.php';
    $db = new myfunc();
?>

<html>
    <head>
    	<title>Manage Users</title>
    </head>
    <body>
    <table>
    <tr>
    	<th>ID</th>
    	<th>Username</th>
    	<th>Delete/Change User</th>
	</tr>
    <?php
    $user = $db->getAllusers();
    for($id = 0;$id < count($user);$id++){
        echo "<form action = 'manageuser.php' method = 'POST'>";
        echo "<tr>";
            echo "<td>".$user[$id][0]."</td>";
            echo "<td>".$user[$id][1]."</td>";
            echo '<td><input type = "hidden" name = "ID" value = "'.$user[$id][0].'">';
            echo '<input type="submit" name = "MakeAdmin" value="Make Admin" /></td>';
        echo "</form>";
        echo "<form action = 'deluser.php' method = 'POST'>";
        echo '<td><input type = "hidden" name = "Delete" value = "'.$user[$id][0].'"><input type="submit" name = "Delete" value="Delete" />';
        echo "</form></tr>";
    }
    ?>
    </table>
    </body>
</html>
