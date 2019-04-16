<?php

// get the q parameter from URL
$email = htmlentities($_REQUEST["s"],ENT_QUOTES);

try {
    include 'connection.php';
    
   
    $query = "SELECT * FROM login WHERE Email=?";
    $resultat = $base->prepare($query);
    $resultat->execute(array($email));
    $count=$resultat->rowCount();
    //echo $count;
    if($count!=0){

 
        echo '1';
        $resultat->closeCursor();
        
    } 
 
} catch (Exception $exc) {
    echo $exc->getMessage();
}


