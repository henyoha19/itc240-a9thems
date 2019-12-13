<?php include 'includes/config.php'?> 
<?php
    
 if(isset($_GET['day'])){//day comes from link page
        $day =$_GET['day'];
 } else{//current day of the week
     $day = date('l');  
 }
switch($day)
{
        
    case 'Monday':  
        $coffee = 'Flat White';
    break;
       case 'Tuesday':  
        $coffee = 'Pumpkin Spice';
    break;
        case 'Wednesday':  
        $coffee = 'Espresso';
    break;  
        
       case 'Thursday':  
        $coffee = 'Cold Brew';
    break;
       case 'Friday':  
        $coffee = 'Latte';
    break;
      case 'Satarday':  
        $coffee = 'Macchiato';
    break; 
      case 'Sunday':  
        $coffee = 'Milk shake';
    break; 
              
}

?>
<?php get_header()?>
<h3> Daily Special</h3>          
<p> Below you can see our daily special for <?=$day?>!</p>
<p><?=$coffee?></p>
<p> Click below to view the specials for every weekday!</p>   

<p> <a href="daily.php?day=Monday">Monday</a></p>          
<p> <a href="daily.php?day=Tuesday">Tuesday</a></p>          
<p> <a href="daily.php?day=Wednesday">Wednesday</a></p>          
<p> <a href="daily.php?day=Thursday">Thursday</a></p>          
<p> <a href="daily.php?day=Friday">Friday</a></p>          
<p> <a href="daily.php?day=Satarday">Satarday</a></p>          
<p> <a href="daily.php?day=Sunday">Sunday</a></p>          
        
         
 <?php get_footer()?>
