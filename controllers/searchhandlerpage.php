<?php
require_once '../db.php';
$db = new myfunc();
$conn = $db->dbConnect();

$searchresult = mysqli_real_escape_string($conn, $_GET['SearchBar']);

$sql = "Select * from posts where post_content LIKE '%$searchresult%'";

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result))
{
    echo $row['article_title']."<br/>".$row['post_content'];
}
    echo "<a href='../views/searchpage.php'>Searchpage</a>";

?>
