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
  $("#profile").click(function(){
    $("#main").load('profile.php');
  });
  
  $("#searchbook").click(function(){
    $("#main").load('searchbook.php');
  });
  
  $("#issuedbooks").click(function(){
   $("#main").load('issuedbooks.php');
  });
  
  $("#logout").click(function(){
   $("#main").load('logout.php');
  });
  
});

</script>
