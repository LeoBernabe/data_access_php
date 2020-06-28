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
	  <link rel="stylesheet" href="registration.css">
   </head> 
  
   <body> 
      <header id="header"> 
         <h1 id="title">WELCOME TO LGERATECH.COM!</h1>
         <p id="subtitle" >Login page</p> 
      </header> 
	 
     <div id="body-container">
      <form action="auth.php" method="post" onsubmit="return validateCredentials()">
		  <input type="text" id="username" name="username" placeholder="Enter your Username">
		  <input type="password" id="password" name="password" placeholder="Enter your Password">
		  <a href = "registration.php" style="padding-right:35px; float:right;">Sign up</a>
		  <input type="submit" value="Submit">
		</form> 
       </div>
   	  
      <footer id="footer"> 
		 <p>Created on June 2020, by <a href = "http://lgeratech.com/">LGeratech.com</a></p> 
      </footer> 
      <script>
         function validateCredentials(){
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            if(username === ''){
               alert('Username is required!');
               return false;
            }else if(password === ''){
               alert('Password is required!');
               return false;
            }else{
               return true;
            }
         }
      </script>
   </body> 
</html> 