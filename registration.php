<!DOCTYPE html>  

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
         <p id="subtitle" >Registration page</p> 
      </header> 

     <div id="body-container">
	 	<form action="insert_user.php" method="post" onsubmit="return register()">
		  <input type="text" name="firstname" id="firstname" placeholder="Enter your First Name">
		  <input type="text" name="lastname" id="lastname" placeholder="Enter your Last Name">
		  <input type="number" name="age" id="age" placeholder="Enter your Age">
		    <select name="gender" id="gender">
			  <option value="Male">Male</option>
			  <option value="Female">Female</option>
			</select>
		  <input type="text" name="username" id="username" placeholder="Enter your Username">
		  <input type="password" name="password" id="password" placeholder="Enter your Password">
		  <br> <br>
		  <input type="submit" value="Submit">
		</form> 
       </div>
   	  
      <footer id="footer"> 
		 <p>Created on November 2019, by <a href = "http://lgeratech.com/">LGeratech.com</a></p> 
      </footer> 
	
	  <script>
			function register(){
				var fName = document.getElementById('firstname').value;
				var lName = document.getElementById('lastname').value;
				var age = document.getElementById('age').value;
				var gender = document.getElementById('gender').value;
				var username = document.getElementById('username').value;
				var password = document.getElementById('password').value;
				var user = {
					firstName:fName,
					lastName:lName,
					age:age,
					gender:gender,
					username:username,
					password:password
				};
				if(fName==''){
					alert('First Name is required!');
					return false;
				}else if(lName==''){
					alert('Last Name is required!');
					return false;
				}else if(age==''){
					alert('Age is required!');
					return false;
				}else if(username==''){
					alert('Username is required!');
					return false;
				}else if(password==''){
					alert('Password is required!');
					return false;
				}
				return true;
			}
		</script>
   </body> 
</html> 