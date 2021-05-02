<?php
    require_once '../db.php';
    $db = new myfunc();
    $conn = $db->dbConnect();
    
    if(isset($_POST["Blogger"]))
    {
    
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $uname = mysqli_real_escape_string($conn, $_POST['uname']);
        $pword = mysqli_real_escape_string($conn, $_POST['pword']);
        
        if ($fname == ""){
            echo " The First Name cannot be blank ";
        }
        if ($lname == ""){
            echo " The Last Name cannot be blank ";
        }
        if ($uname == ""){
            echo "Please submit a username";
        }
        if ($pword == ""){
            echo "Please submit a password";
        }
        
        $sql = "INSERT INTO users(First_Name, Last_Name, USERNAME, PASSWORD, admin) VALUES('$fname', '$lname', '$uname', '$pword', false)";

        if (mysqli_query($conn, $sql)) 
        {
            mysqli_close($conn);
            header("Location: ../views/login.html");
        } 
        else 
        {    
            mysqli_close($conn);
            header("Location: ../views/Register.html");
        }
    }
    if(isset($_POST["Admin"]))
    {
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $uname = mysqli_real_escape_string($conn, $_POST['uname']);
        $pword = mysqli_real_escape_string($conn, $_POST['pword']);
        $acode = $_POST['acode'];
        if($acode !="1234"){
            mysqli_close($conn);
            header('Location: ../views/RegisterAdmin.html');
            exit();     //kept in code in case code tries to continue executing after the check fails
        }
        
        if ($fname == ""){
            echo " The First Name cannot be blank ";
        }
        if ($lname == ""){
            echo " The Last Name cannot be blank ";
        }
        if ($uname == ""){
            echo "Please submit a username";
        }
        if ($pword == ""){
            echo "Please submit a password";
        }
        
        $sql = "INSERT INTO users(First_Name, Last_Name, USERNAME, PASSWORD, admin) VALUES('$fname', '$lname', '$uname', '$pword', true)";
        
        if (mysqli_query($conn, $sql)) 
        {
            mysqli_close($conn);
            header("Location: ../views/login.html");
        }
        else 
        {
            mysqli_close($conn);
            header("Location: ../views/RegisterAdmin.html");
        }
    }
    ?>
    