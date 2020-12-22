<?php
session_start();
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
<img src="<?php echo $_SESSION['image']; ?>" width="350" height="400"> 
<?php

include("db_connect.php");
include("db_functions.php");
//echo $_SESSION['instructions'];

echo "<br><h1>Instructions: ". "</h1>";
	$instructions = preg_split('/(?<=[.?!])\s+/' , $_SESSION['instructions'], -1 , PREG_SPLIT_NO_EMPTY);
	//$x = "1" ;
	foreach($instructions as $step){
		//$step = ltrim($step, "STEP ".$x." -");
		echo $step."<br>";
		//$x++;
		}
?>
   


<h3><a href="index.html">Logout</a></h3>

</body>
</html>
