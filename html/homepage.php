<?php
session_start();
include("db_connect.php");
include("db_functions.php");
echo "hello there";
    global $db;
    $query ='SELECT * FROM recipes';
    $statement = $db->prepare($query);
    $statement->execute();
    $recipes = $statement->fetchAll();



?>

<html lang="en">

<head>
  <title>Recipes</title>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>

    <h1> Welcome <?php echo "userid:".$_SESSION['userid']." " . $_SESSION['username'] ; ?></h1>
    <h2>Recipes</h2>
              
        
    <table style="width:100%">
      <thead>
        <tr>
	  <th>Image</th>
          <th>Name</th>
          <th>Category</th>
          <th>Cuisine</th>
          
          
        </tr>
      </thead>
      <tbody>
        <?php foreach ($recipes as $quest) : ?>
        <tr>
	  <td><img src="<?php echo $quest['mealMealThumb']; ?>" width="175" height="200"></td>	
          <td><?php echo $quest['mealMeal']; ?></td>
          <td><?php echo $quest['mealCategory']; ?></td>
	  <td><?php echo $quest['mealArea']; ?></td>
	  
	  
          
  
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <form action="index.php" method="post">
    
    </form>
   


    <h3><a href="index.html">Logout</a></h3>

</body>
</html>
