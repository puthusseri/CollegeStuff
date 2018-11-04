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
$available = $row['available'];
$current_date = date("Y/m/d");
    if($available == 'No') {
        $sql = "UPDATE  borrower SET return_date = '$current_date' where id = '$id' ";
                //Check if deletion is possible or not
                if ($conn->query($sql) === TRUE) {
                    echo "Successfully returned the book";
                    $sql = "UPDATE  book SET available = 'Yes' where id = '$id' ";
                } else {
                    echo "Error :".$conn->error;
                }
            
                //Also displays the messages on the error in query
    }

?>