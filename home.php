<!DOCTYPE html>  
<?php 
   if (isset($_GET['message'])) {
      echo '<script type="text/javascript">alert("' . $_GET['message'] . '");</script>';
   }
?>
<html>  

   <head> 
      <meta charset = "utf-8"> 
      <title>LGeratech.com</title> 
	  <link rel="stylesheet" href="style.css">
   </head> 
   
   <body> 
   
      <header id="header"> 
         <h1 id="title" >Welcome to LGeratech.com!</h1> 
         <p id="subtitle" >Home page</p> 
      </header> 
	  
      <nav> 
         <ul class="nav-container"> 
            <li class="nav-item active"><a href = "home.php">Home</a></li> 
            <li class="nav-item"><a href = "profile.php">Profile</a></li> 
         </ul> 
      </nav> 
	  
	  <div id="body-container">
		 <p id="message">Hello, and welcome to my home page,
		  I'm Leo Gerald Bernabe, and I made this design for you.
		  if you have question, suggestion,
		  or request you can comment below or notify me on my email
		  (<a href = "leo.gerald.bernabe18@gmail.com">leo.gerald.bernabe18@gmail.com</a>)
		  , thanks
		 </p>
	  </div>
	  
      <footer id="footer"> 
		 <p>Created on November 2019, by <a href = "http://lgeratech.com/">LGeratech.com</a></p> 
      </footer> 
   
   </body> 
</html> 