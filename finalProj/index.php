<!DOCTYPE html>
<html>
<head>
        <title>Home</title>
        <link rel="stylesheet" href="index.css">
    
    <link rel="import" href="navbar.html">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="//code.jquery.com/jquery.min.js"></script>

</head>

<body>
    
    <!-- <ul id="navbar">
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php">Sign In</a></li>
        <li>Logout</li>
    </ul>
    -->
    <br>
    <br>
    
    
    <div id="div" class="group">
    <h1><b>Mizzou NSBE</b></h1>
    <h3>National Society of Black Engineers</h3>
          <h3>-------------------------------------------------</h3>
    
    <div id="pics" class="column">
        <div id="buttons" class="column">
            <form action="index.php" method="POST">
            <input name="exec" type="submit" value="Executive Board"><br>
            <input name="events" type="submit" value="Upcoming Events"><br>
            <input name="involv" type="submit"  value="Social Media"><br>
            
            </form>
        </div>
        
        <img src="images/dab.JPG" alt="execb">
        <img src="images/exec.jpg" alt="exec">
    </div>
    <div id="words">    
        <h3>The mission of the National Society of Black Engineers is <br>"to increase the number of culturally responsible Black Engineers who<br> excel academically, <br>succeed professionally and <br>positively impact the community."</h3>
        </div>   
    </div>
    
    
    <?php
    include_once('navbar.html');
    if (isset($_POST['exec'])){
        header("Location: exec.php");
        exit;
    }
    
    if (isset($_POST['events'])){
        header("Location: events.php");
        exit;
    }
        
        
    if (isset($_POST['involv'])){
        header("Location: involv.php");
        exit;
    }
            
            
    if (isset($_POST['pics'])){
        header("Location: pics.php");
        exit;
    }
                
   ?>
    
    </body>
</html>

