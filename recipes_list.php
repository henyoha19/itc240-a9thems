<?php
//customer_list.php - shows a list of customer data
/*
create table Recipes
( ReceipeID int unsigned not null auto_increment primary key,
Title varchar(50),
CookingTime varchar(50),
Ingredients text, 
Directions text
);

insert into Recipes values (NULL,"Perfect Turkey","4 hours","Turkey", "bake at 350");
*/
?>
<?php include 'includes/config.php';?>
<?php get_header()?>

<?php
$sql = "select * from Recipes";
//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$result = mysqli_query($iConn,$sql);

if(mysqli_num_rows($result) > 0)
{//show records

    while($row = mysqli_fetch_assoc($result))
    {
       
         echo '<p><a href="receipe_view.php?id=' . $row['ReceipeID'] . '">' . $row['Title'] . '</a></p>';
        echo '<p><b>Ingredients: </b>' . $row['Ingredients'] . '</p> ';
        echo '<p><b>Directions: </b>' . $row['Directions'] . '</p> ';
         echo '<p><img src="uploads/recipes' . $row['ReceipeID'] . '.jpg" /></p>';
    }    

}else{//inform there are no records
    echo '<p>There are currently no customers</p>';
}

//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

?>
<?php get_footer()?>