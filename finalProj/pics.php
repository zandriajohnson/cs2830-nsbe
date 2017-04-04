<!doctype html>
<html lang="en">
<head>
     <link rel="stylesheet" href="index.css">
    
    <link rel="import" href="navbar.html">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Tooltip - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( document ).tooltip();
  } );
  </script>
  <style>
  label {
    display: inline-block;
    width: 5em;
  }
  </style>
</head>
<body>
 <?php
include_once('navbar.html');
    ?>
    <br><br>
    <div id="div" class="column">
        <h1>Follow us on Social Media!</h1>
        
        <h3>Twitter</h3>https://twitter.com/MizzouNSBE
        <img class="imgtwitt" src="images/mizzou.jpg" alt="execb">
        <h3>Snapchat</h3> MizzouNSBE
        <img class="imgtwitt" src="images/snap.jpg" alt="execb">
        <h3>GroupMe</h3> Contact a member of the executive board to join!
        <h3 title="hi">Instagram        <a href="  https://www.instagram.com/mizzounsbe" title="Follow us on Instagram">Instagram</a>
</h3> 
        https://www.instagram.com/mizzounsbe
        
        <input type="image" class ="imgtwitt" src="images/mizzou.jpg" title="Follow us for live updates!">
         
        <input type="image" class ="imgtwitt" src="images/snap.jpg" title="Take a picture of our snapcode!">
        
<p><a href="#" title="That&apos;s what this widget is">Tooltips</a></p>
<p>But as it's not a native tooltip, it can be styled. Any themes built with
<a href="http://jqueryui.com/themeroller/" title="ThemeRoller: jQuery UI&apos;s theme builder application">ThemeRoller</a>
will also style tooltips accordingly.</p>
<p>Tooltips are also useful for form elements, to show some additional information in the context of each field.</p>
<p><label for="age">Your age:</label><input id="input" title="We ask for your age only for statistical purposes."></p>

 
    </div>
</body>
</html>