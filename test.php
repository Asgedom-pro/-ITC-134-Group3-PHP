<?php
date_default_timezone_set('America/Los_Angeles');
$day = date("l")
$today = date("F j, Y")

    
switch ($day){
    case "Friday":
        $bgColor="";
        $pic="";
        $comment="PHP is free to use.";
        
        break;
        case "Saturday":
        $bgColor="";
        $pic="";
        $comment="PHP can be embedded in HTML code.";
        
        break;
        case "Sunday":
        $bgColor="";
        $pic="";
        $comment="PHP 7 is the most current version of PHP.";
        
        break;
        case "Monday":
        $bgColor="";
        $pic="";
        $comment="PHP was created in 1994 by Rasmus Lerdorf.";
        
        break;
        case "Tusday":
        $bgColor="";
        $pic="";
        $comment="PHP originally stood for Personal Home Page but now it stands for PHP: Hypertext Preprocessor";
        
        break;
        case "wednesday":
        $bgColor="";
        $pic="";
        $comment="PHP is server side scripting language used in web development.";
        
        break;
        case "Thursday":
        $bgColor="";
        $pic="";
        $comment="PHP creates dynamic web content.";
        
        break;
        default:
        $bgColor="";
        $pic="";
        $comment="PHP is fun!";
        
        break;
     
        
}
?>
<!DOCTYPE html>
<html>
<title>Group-3PHP</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body class="w3-content" style="max-width:1300px">

<!-- First Grid: Logo & About -->
<div class="w3-row">
  <div class="w3-half w3-black w3-container w3-center" style="height:700px">
    <div class="w3-padding-64">
      <h1>Group3-PHP</h1>
    </div>
  </div>
  <div class="w3-half w3-blue-grey w3-container" style="height:700px">
    <div class="w3-padding-64 w3-center">
      <h1>Today</h1>
      <img src="/w3images/avatar3.png" class="w3-margin w3-circle" alt="Person" style="width:50%">
      <div class="w3-left-align w3-padding-large">
        <p>Lorem ipusm sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
        <p>Lorem ipusm sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
  </div>
</div>

 

<!-- Footer -->
<footer class="w3-container w3-black w3-padding-16">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

</body>
</html>
