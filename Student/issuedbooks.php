<?php
include("config.php");

session_start();
$id = $_SESSION['id'];
$sql = "select booknumber from borrower where id = $id;
$result = $conn->query($sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = $result->fetch_assoc()) {
        $temp = $row[booknumber];
        $sql = "select * from book where booknumber = '$temp'";
        $result = $conn->query($sql);
        while ($bookrow = $result->fetch_assoc()) {
            printf ("%s (%s)\n", $bookrow["bookname"], $bookrow["author"], $bookrow["booknumber"]);
        }
    }
}
else {
    echo "No result found";
}
?>
