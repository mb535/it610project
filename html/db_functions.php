<?php

function get_users() {
    global $db;
    $query = 'SELECT * FROM users';
    $statement = $db->prepare($query);
    $statement->execute();
    $users = $statement->fetchAll();
    
    return $users;    
}


?>
