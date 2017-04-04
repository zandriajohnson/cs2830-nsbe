<!DOCTYPE html>
<html>
<head>
       <link rel="stylesheet" href="index.css">
		
        <title>Login</title>
    </head>
    <body>
        
        <br>
    <br>
        <br>
        <div id="divlogin" class="group">
            <h1>Login</h1>
            <form action="login.php" method="POST">
                <input class="input" type="text" name="username" placeholder="Username" required="required" /><br>
                <input class="input" type="password" name="password" placeholder="Password" required="required" />
                <button type="submit" name ="login" class="btn btn-primary btn-block btn-large">LOGIN</button>
            </form>
        </div>
        
        <?php 
        include_once('navbar.html');
        require_once "database.conf";
        session_start();     
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ("Connection error on 51");               
	
	   /* check connection */
	   if (mysqli_connect_errno()) 
	   {
		  printf("Connect failed: %s\n", mysqli_connect_error());
		  exit();
	   }
	
    
        if (isset($_POST['login'])) {
            
        $username = $_POST['username'];
		$password = $_POST['password'];
        
        
        $userquery = "SELECT * FROM users WHERE username = '$username'";
		if ($userinfo = mysqli_query($conn, $userquery)) {
				//username found
				if (mysqli_num_rows($userinfo) == 1) {
						$row = mysqli_fetch_assoc($userinfo);
						if ($row['password'] == $password) {
								//password is correct
                              
								$_SESSION['username']   = $username;
								$_SESSION['usertype'] =   $row['type'];
                           
                        
                                if($_SESSION['usertype'] == 'admin'){
                                    header("Location: admin.php");
                                    exit;
                                }
								
						} else {
								//password is incorrect
								echo '<br><br><div id="top" class="group"><h3>LOGIN FAILED</h3></div>';
								break;
						}
				}
				
				
		}
		
        break;
  
        }
   
   

?>
    </body>
</html>