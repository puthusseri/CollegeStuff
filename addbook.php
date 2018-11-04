<link rel="stylesheet" type="text/css" href="style_for_addbook.css">

<div>
    <form method = POST>
        <label for="bookname">Book Name</label>
        <input type="text" id="bookname" name="firstnbooknameame" placeholder="Enter the book name">

        <label for="author">Author Name</label>
        <input type="text" id="lname" name="lname" placeholder="Enter the author name">
        <center>
            <input type="submit" value="Submit">
            <input type = reset value = Reset>
        </center>
    </form>
</div>
<?php
include("config.php");
$bookname = $_POST['bookname'];
$author   = $_POST['author'];
$current_date = date("Y/m/d");
$available = 'Yes';
    if(isset($bookname)){
        $sql = "INSERT INTO book (bookname, author, bought_date, available)
                VALUES ( '$bookname', '$author', $current_date, '$available')";
                //Check if insert is possible or not

                if ($conn->query($sql) === TRUE) {
                    echo "Successfully inserted";
                } else {
                    echo "Error :".$conn->error;
                }
                //Also displays the messages on the error in query

    }

    ?>
