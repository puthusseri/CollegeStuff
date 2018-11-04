<link rel="stylesheet" type="text/css" href="style.css">

	<div class="card">
	  <img src="ico.png" alt="name" style="width:50%">
	  <h1>
	  <?php
		session_start();
		echo $_SESSION['fullname'];
	  ?>
	  </h1>
	  <p class="title">
	  <?php
	  echo $_SESSION['designation']
	  ?>
	  
	  </p>
	</div>

