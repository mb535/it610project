<?php
//session_unset();
session_start();

include("db_connect.php");
include("db_functions.php");

$action = filter_input(INPUT_POST, "action");
//$usern = filter_input(INPUT_POST, 'username');

if ($action == 'auth_login'){
   $users = get_users();
   //print_r($users);
   $_SESSION['username'] = filter_input(INPUT_POST, 'username');
   $_SESSION['password'] = filter_input(INPUT_POST, 'password');
   foreach ($users as $user){
      if ($user['username'] == $_SESSION['username'] && $user['password'] == $_SESSION['password']){
		$_SESSION['userid'] = $user['userid'];	
		
		header("Refresh:0; url=homepage.php");}
		  
    }
}

    
?>

<html>


<form action="index.php" method="post">
        <input type="hidden" name="action" value="auth_login">

        <h2>  IT610 Project</h2>
        <h2><legend>Login</legend></h2>
            
              <label for="username">username:</label>
              <input type='text' name='username' id='username'  > 
           
            
            
              <label for="password">Password:</label>
              <input type='text' name="password"  id="password" > 
            
            

            
            <input type="submit" value="Submit">

        
      </form>

</html>