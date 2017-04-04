<!DOCTYPE html>
<html>
<head>
        <title>Executive Board</title>
        <link rel="stylesheet" href="index.css">
    
    <link rel="import" href="navbar.html">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="//code.jquery.com/jquery.min.js"></script>

     <script src="../jquery-1.11.2.min.js"></script>
	<script>
        
        // Reference: http://api.jquery.com/category/ajax/
        
		function getContent(buttonID) {
            // Message to let the user know content is loading
            $("#contentBox").html("Loading Members....");
            
            // jQuery AJAX GET
            // http://api.jquery.com/jQuery.get/
            $.get("execinfo.php", {
           "infoId": buttonID 
        },function(data) {
                // data contains responder.php's output
				console.dir(data);
                
                // Place that output in #contentBox
                $("#contentBox").html(data);
            });
		}
		
	</script>
    
</head>

<body>

   
    
<?php
include_once('navbar.html');
?>

    <br>
    <br>
    <div id="div" class="group">
     <h1>See Our Leaders:</h1>
    <h3>Executive Board elections for 2017-2018 school year coming soon!</h3>
        <h3>-------------------------------------------------</h3>
        
     <div id="content" class="column">
        <img src="images/ecex2.jpg" alt="execb"> 
       
        <div id="divex" class="column">
            <p id="contentBox"></p>
	        <button type="button" onclick="getContent('1')"  class="btn btn-primary btn-block btn-large">2016-2017</button><br>
            <button type="button" onclick="getContent('2')"  class="btn btn-primary btn-block btn-large">2015-2016</button><br>
            <button type="button" onclick="getContent('3')"  class="btn btn-primary btn-block btn-large">2014-2015</button>
        </div>
    </div>
</body>
</html>