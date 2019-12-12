<?php
/*
    config.php allows us to place configuration information
    into our web application
*/

//include database credentials
include 'credentials.php';

define('DEBUG',TRUE); #we want to see all errors

//identifies unique page url
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//stores global data for site
$config = new stdClass;

//here is our navigation
$config->nav1['index.php'] = 'Home';
$config->nav1['daily.php'] = 'Daily';
$config->nav1['db.php'] = 'Database';
$config->nav1['contact1.php'] = 'Contact Us';
$config->nav1['template.php'] = 'Template';


//these are defaults
$config->slogan = 'It\'s a kind of magic!';
$config->banner = 'LARGEBUCKS COFFEE';

//these are page specific
switch(THIS_PAGE)
{
    case 'template.php':
        $config->title = 'Sample Page';
        $config->slogan = 'Best Template Ever!';
    break;
        
    case 'contact1.php':
        $config->title = 'Contact Page';
        $config->slogan = 'Contact the magic!';
    break;
        
    case 'db.php':
        $config->title = 'Data Base Page';
        $config->slogan = 'Data is a Power!';
    break;
        
   case 'daily.php':
        $config->title = 'Daily Special';
        $config->slogan = 'Every day is Special!';
    break;
        
        case 'index.php':
        $config->title = 'Home Page';
         $config->slogan = 'Home Sweet Home!';
    break;
        
        
        
    default:
       $config->title = THIS_PAGE; 
        
}

//functions go at the bottom

function bcLinks($nav)
{
    
   $myReturn = '';
    foreach($nav as $url => $text){
    if(THIS_PAGE == $url){//current page
        $myReturn .= '
         <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase 
              text-expanded" href="' . $url . '">' . 
            $text . '</a>
            </li>
        ';
    }else{//all other pages
        $myReturn .= '
         <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="' . $url . '">' . $text . '</a>
            </li>
        ';
    }//end if
 
}//end foreach

 return $myReturn;   
    
}//end bcLink

function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
		echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
		die();
    }
}













