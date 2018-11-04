<?php

include("home.php");
include("config.php");

$searchname = $_POST['searchname'];
$sql = "select * from book where author = '$searchname' or bookname = '$searchname' or number = $searchname" and available = 1;
$result = $conn->query($sql);
if (mysqli_num_rows($result) > 0) {

    while ($row = $result->fetch_assoc()) {
        printf ("%s (%s)\n", $row["bookname"], $row["author"], $row["booknumber"]);
    }
}
else {
    echo "No result found";
}
?>
