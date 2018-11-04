<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<div class="topnav">
  <a href="#"  id = "listbooks">List Books</a>
  <a href="#"  id = addbook>Add Book</a>
  <a href="#"  id = issuebook>Issue Book</a>
  <a href="#"  id = deletebook>Delete Book</a>
  <a href="#"  id = updatebook>Update Book</a>
  <a href="#"  id = returnbook>Return Book</a>
  <a href="#"  id = addstudent>Add Student</a>
  <a href="#"  id = "profile">Profile</a>
  <a href="#"  id = logout>Logout</a>
</div>

<div id ="main" name = main>
  <h2>Top Navigation Example</h2>
  <p>Some content..</p>
</div>


<script>

$(document).ready(function(){
    $("#listbooks").click(function(){
        $("#main").load('listbooks.php');
    });
  
    $("#addbook").click(function(){
        $("#main").load('addbook.php');
    });
    
    $("#issuebook").click(function(){
        $("#main").load('issuebook.php');
    });
    $("#deletebook").click(function(){
        $("#main").load('deletebook.php');
    });
    $("#updatebook").click(function(){
        $("#main").load('updatebook.php');
    });
  
    $("#returnbook").click(function(){
        $("#main").load('returnbook.php');
    });
    
    $("#addstudent").click(function(){
        $("#main").load('addstudent.php');
    });
    $("#profile").click(function(){
        $("#main").load('profile.php');
    });
    $("#logout").click(function(){
        $("#main").load('logout.php');
    });
  
});

</script>
