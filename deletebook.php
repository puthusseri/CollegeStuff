<link rel="stylesheet" type="text/css" href="style_for_addbook.css">
<div>
    <form method = POST>
       

        <label for="id">Book ID</label>
        <input type="text" id="id" name="id" placeholder="Enter the Book ID">
        <center>
            <input type="submit" value="Issue">
            <input type = reset value = Reset>
        </center>
    </form>
</div>



<?php
include("config.php");
$id   = $_POST['id'];
$sql = "select * from book where id = '$id'";
$result = $conn->query($sql);
$row = mysql_fetch_assoc( $result );
$bookname = $row['bookname'];
$author = $row['author'];
$available = $row['available'];
$current_date = date("Y/m/d");

    if($available == 'Yes') {
        $sql = "INSERT INTO borrower (bookname, author, issue_date)
                VALUES ( '$bookname', '$author', $current_date)";
                //Check if insert is possible or not

                if ($conn->query($sql) === TRUE) {
                    echo "Successfully issued";
                    $sql = "UPDATE book set available = 'No' where id = '$id' ";
                    $result = $conn->query($sql);
                } else {
                    echo "Error :".$conn->error;
                }
                //Also displays the messages on the error in query

    }

?>