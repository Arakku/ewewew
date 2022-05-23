<?php
$param = (isset($_GET['load']) && $_GET['load'] != '') ? $_GET['load'] : '';
?>
<!Doctype html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="css/stylesheet.css"/>
 <title> My Recipe Homepage </title>
 </head>
 
 <body>
 <center><h1> Welcome to my Webpage. Hi! my name if Gideon Calderon BSIT 1D</h1></center>
 <ul>
 <li><a href="index.php">Home</a></li>
 <li><a href="LT2/THE RECIPE WEBSITES/Recipe Website.html"> LEARNING TASK 2 </a></li>
 <li><a href="LT3/10 FAVORITE CELEBRITIRES WEBSITE/Top 10 Celebrities.html"> LEARNING TASK 3 </a></li>
 <li> <a href="CLE1MT/CASE STUDY WEBSITE (POVERTY)/index.html"> MIDTERM</a></li>
 <li><a href="LT4/WEB TOPOGRAPHY/topography.html"> LEARNING TASK 4 </a></li>
 </ul>
  
  </div>
           <div id="content">
            <?php
               switch($param){
                   case 'news':
                       include 'news.php';
                   break;
                   case 'contact':
                        include 'contact.php';
                   break;
                   case 'about':
                       include 'about.php';
                   break;
                   default:
                        include 'home.php';
                   break;
               }
            ?>
           </div>
        </div>
 
 </body>
</html>


