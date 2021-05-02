<?php
    require_once '../db.php';
    $db = new myfunc();
    $conn = $db->dbConnect();
    
    $Uname = mysqli_real_escape_string($conn, $_POST['Uname']);
    $Pword = mysqli_real_escape_string($conn, $_POST['Pword']);
    if ($Uname == "")
    {
        echo " The First Name cannot be empty";
    }
    if ($Pword == "")
    {
        echo " The Password field is empty";
    }
    
    // checks to match username and password and logs in the users
    $sql = "SELECT * From users Where USERNAME = '$Uname'";
    $result = mysqli_query($conn, $sql) or die ("Failed to query database". mysql_error());
    $row = mysqli_fetch_array($result);
    
    if ($row['PASSWORD'] == $Pword )
    {    
        $db->setUseradmin($row['admin']);
        $db->setUserID($row["ID"]);  
        mysqli_close($conn);
        header("Location: ../views/post.php");
    } 
    else
    {
        mysqli_close($conn);
        header("Location: ../views/login.html");
    }
    
?>