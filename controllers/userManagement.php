<?php
    require_once '../db.php';
    $db = new myfunc();
    $conn = $db->dbConnect();
    
    if(isset($_POST['MakeAdmin']))
    {
        $id = mysqli_real_escape_string($conn, $_POST['ID']);
        $sql = "UPDATE users SET admin = 1 WHERE ID ='$id';";
        
        mysqli_query($conn,$sql);
        
        mysqli_close($conn);
        header( "Location: ../views/adminManagement.php");
    }
    if(isset($_POST['Delete']))
    {
        $id = mysqli_real_escape_string($conn, $_POST['Delete']);
        
        $sql = "DELETE FROM users WHERE ID = '$id'";
        mysqli_query($conn, $sql);
        
        mysqli_close($conn);
        header("Location: ../views/adminManagement.php");
    }

?>
