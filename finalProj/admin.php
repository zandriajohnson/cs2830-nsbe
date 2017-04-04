<!DOCTYPE html>
<html>
<head>
        <title>Administrator</title>
        <link rel="stylesheet" href="index.css">
    
    <link rel="import" href="navbar.html">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="//code.jquery.com/jquery.min.js"></script>
<script> 
		
            var me = "Zandria's project.. whats up?";
			function pageLoaded() {
				var box = document.getElementById("animateMe");
				
				// "me" is in scope here too
				console.log("log:" + me);
			}
			
			
		</script>

    </head>
    
    
    <body onload="pageLoaded()">
<?php
session_start();
include_once('navbar.html');
?>
        <br><br>
        <div id="div" class="group">
		<div id="animateMe">
			
            <h1>Hello, <?php echo $_SESSION['username']; ?>! </h1>
            <h3>You look beautiful today!</h3>
            <h3>-------------------------------------------------</h3>
            
            <div id="pics" class="column">
            
                <div id="sidebar" class="column"></div>
                
                <img src="images/zan.jpg" alt="me" class="imgtwitt">
    
                <div id ="profile" class="column">
                    <h3>Zandria Johnson</h3>
                    <h3>Computer Science</h3>
                    <h3>Junior</h3>
                    <h3>University of Missouri</h3>
                    <h3>NSBE Member | Senator</h3>
                    <h3>09/14/1995</h3>
                </div>
                
                <div id ="profile" class="column">
                    <h3>About Me: <br>This is my project for CS2830, I am apart of a campus organization called The National Society of Black Engineers. I am interning with Target in the summer of 2017 as a Technology Services Intern. I'm so excited!</h3>
                    
                </div>
            </div>
         
           
        
		</div>
		
		
        </div>
	</body>

</html>