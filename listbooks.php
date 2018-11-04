<link rel="stylesheet" type="text/css" href="style_for_listbooks.css">
<?php
include("config.php");
$sql = "select * from book";
$result = $conn->query($sql);
<table id = displaybooks>
        <tr>
          <th>Book ID</th>
          <th>Book Name</th>
          <th>Author</th>
          <th>avilable</th>
        </tr>
        while( $row = mysql_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row\['bookid'\]}</td>
              <td>{$row\['bookname'\]}</td>
              <td>{$row\['author'\]}</td>
              <td>{$row\['available'\]}</td>
            </tr>\n";
          }
</table>
?>