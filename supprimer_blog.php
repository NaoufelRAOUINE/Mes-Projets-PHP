<?php
include './cryptage.php';
        if(isset($_GET)){
        
       

        $id=doDecrypt($_GET['id']);
        include 'connection.php';
        $sql = "DELETE FROM blog WHERE Id=:id";
        $resultat = $base->prepare($sql);
        $resultat->execute(array('id' => $id));
        header('Location:afficher_blog.php');
        }
        else{
            header('Location:afficher_blog.php');
        }

