<?php  session_start();?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Blog</title>
        <style>
            *{margin:10px}
        </style>
    </head>
    <body>
        <?php 
            if(isset($_SESSION['login'])&&isset($_SESSION['id'])){
        ?>
        <form action="ajouter_blog.php" method="POST" enctype="multipart/form-data">
        <h2>Formulaire d'ajout de contenu au Blog</h2>
        <label>Titre: </label>
        <input type="text" name="titre" required/><br/>
        <label>Commentaire: </label><br/>
        <textarea rows="20" cols="70" name="texte" required></textarea><br/>
        <label>Choissisez une photo avec une taille inférieure à 2 Mo</label><br/>
        <input type="hidden" name="MAX_FILE_SIZE" value="2000000"/>
        <input type="file" accept="image/*" id="file"  name="image"/><br/>
        <script>
          

        </script>
        <input type="submit" id="submit" /><br/>
        <a href="afficher_blog.php">Page d'affichage du blog</a>
        <br />
<input type="button"  value="Déconnexion" onclick="deconnexion()"/>
<script type="text/javascript">
    function deconnexion() {
    window.location.replace("Logout.php");
}
</script>
        </form>
       
    </body>
    <?php 
            }
 else {
                header('location:login.php');
}
if(isset($_GET['message'])&&$_GET['message']==1)
{ echo "<span style=color:#ff0000>Taille d'image superieur à 2MO</span>";}
    ?>
</html>
