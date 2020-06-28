<!DOCTYPE html>  
<?php 
  session_start();
  $user = isset($_SESSION['user']) ? $_SESSION['user'] : null;
?>
<html>  
   <head> 
      <meta charset = "utf-8"> 
      <title>LGeratech.com</title> 
	  <link rel="stylesheet" href="style.css">
	  <link rel="stylesheet" href="profile.css">
   </head> 
  
   <body> 
      <header id="header"> 
         <h1 id="title">WELCOME TO LGERATECH.COM!</h1> 
         <p id="subtitle" >Profile page</p> 
      </header> 
	  <nav> 
         <ul class="nav-container"> 
            <li class="nav-item"><a href = "home.php">Home</a></li> 
            <li class="nav-item active"><a href = "profile.php">Profile</a></li> 
         </ul> 
      </nav> 
   
		<div id="profile-container">
		  <br>
		  <img src="avatar_frontend.png" alt="face" height="130" width="150">
		  <br>
		  <br>
		  <label>Username:	</label>
			<strong><?php echo $user['username']; ?></strong>
			<br>
		  <label>Name:	</label>
			<strong><?php echo $user['firstname'] . ' ' . $user['lastname']; ?></strong>
			<br>
		 <label>Age: </label>
			<strong><?php echo $user['age']; ?></strong>
			<br> 
		 <label>Gender: </label>
			<strong><?php echo $user['gender']; ?></strong>
			<br>
		</form> 
	</div>
      <footer id="footer"> 
		 <p>Created on November 2019, by <a href = "http://lgeratech.com/">LGeratech.com</a></p> 
      </footer> 
   </body> 
</html> 