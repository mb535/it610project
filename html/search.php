<?php
include("db_connect.php");
include("db_functions.php");
$_search = $_POST["Search"];
//echo $_search;
global $db;
    $query ="SELECT * FROM recipes WHERE mealMeal LIKE '%".$_search."%' OR mealCategory LIKE '%".$_search."%' OR mealArea LIKE '%".$_search."%'";
    //$query ='SELECT * FROM recipes';
    $statement = $db->prepare($query);
    $statement->execute();
    $recipes = $statement->fetchAll();



?>

<html lang="en">

<head>

    <!-- Required meta tags -->

    <!-- Bootstrap CSS -->


    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">

    <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-1">
  <a class="navbar-brand" href="/">Welcome <?php echo $_SESSION['username'] ; ?>
    <title>Welcome to My Homepage</title>
    </a>
  <button aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarNavDropdown" data-toggle="collapse" type="button">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/homepage.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0" action="search.php" method="post">
      <input class="form-control mr-sm-2" name="Search" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<head>

<body>    
    <h2>Recipes</h2>
              
        
    <table class="table">
      <thead>
        <tr>
	  <th scope="col">Image</th>
          <th scope="col">Name</th>
          <th scope="col">Category</th>
          <th scope="col">Cuisine</th>
          
          
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
