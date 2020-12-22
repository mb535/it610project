<?php

function get_users() {
    global $db;
    $query = 'SELECT * FROM users';
    $statement = $db->prepare($query);
    $statement->execute();
    $users = $statement->fetchAll();
    
    return $users;    
}
function getInstructions($idMeal) {
  	global $db;
  	$query = "SELECT * FROM recipes where idMeal = :id";
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $idMeal);
    $statement->execute();
    $instructions = $statement->fetchAll();
    return $instructions; 
}

?>
