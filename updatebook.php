<link rel="stylesheet" type="text/css" href="style_for_addbook.css">
<div>
    <form method = POST>
        <label for="id">Book ID</label>
        <input type="text" id="id" name="id" placeholder="Enter the Book ID">
        <label>Enter New Details</label>
        <label for="bookname">Book Name</label>
        <input type="text" id="bookname" name="firstnbooknameame" placeholder="Enter the book name">
        <label for="author">Author Name</label>
        <input type="text" id="lname" name="lname" placeholder="Enter the author name">

        <center>
            <input type="submit" value="Issue">
            <input type = reset value = Reset>
        </center>
    </form>
</div>



<?php
include("config.php");
$id   = $_POST['id'];
$bookname = $_POST['bookname'];
$author   = $_POST['author'];
$sql = "select * from book where id = '$id'";
$result = $conn->query($sql);
$row = mysql_fetch_assoc( $result );
$available = $row['available'];
$current_date = date("Y/m/d");

    if($available == 'Yes') {
        $sql = "UPDATE  book SET bookname = '$bookname', 
                author = '$author' where id = '$id' ";
                //Check if deletion is possible or not

                if ($conn->query($sql) === TRUE) {
                    echo "Successfully updated the book";
                } else {
                    echo "Error :".$conn->error;
                }
            
                //Also displays the messages on the error in query

    } else {
            echo "Book '$bookname' is issued to a student . Cannot update temporarly";
    }

?>