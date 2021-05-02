<?php
require_once '../db.php';
$db = new myfunc();
$conn = $db->dbConnect();

$postID = mysqli_real_escape_string($conn, $_POST['postID']);
$commentContent = mysqli_real_escape_string($conn, $_POST['comment_content']);
$userID = mysqli_real_escape_string($conn, $db->getUserID());


$sql = "INSERT INTO comments (comment_content, postID, userID) VALUES ('$commentContent', '$postID', '$userID')";

mysqli_query($conn, $sql);
mysqli_close($conn);
header("Location: ../views/postview.php");
?>
