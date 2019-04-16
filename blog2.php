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
         /**/
            //$id= doDecrypt(($_GET['id']));
            if(isset($_SESSION['login'])&&isset($_SESSION['id'])&&isset($_GET['id'])){
              
        ?>
        <form action="modifier_blog.php" method="POST" enctype="multipart/form-data">
        <h2>Formulaire de modification de contenu au Blog</h2>
        
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" /><br/>
        <label>Titre: </label>
        <input type="text" name="titre" value="<?php echo $_GET['titre']; ?>" required/><br/>
        <label>Commentaire: </label><br/>
        <textarea rows="20" cols="70" name="texte" required><?php echo $_GET['texte']; ?></textarea><br/>
        <img src="Photos/<?php echo $_GET['image']; ?>" alt="erreur" style="width:250px;height:250px;"/><br/>
        <label>Choissisez une photo avec une taille inférieure à 2 Mo</label><br/>
        <input type="hidden" name="old_image" value="<?php echo $_GET['image']; ?>"/><br/>
        <input type="file" accept="image/*" id="file" onchange="tester()"  name="image" /><br/>
        <script>
           function tester(){
         
        //get the file size and file type from file input field
        var size=1024*1024*2;
        var fsize = document.getElementById('file').files[0].size;
        if(fsize<size)
        {document.getElementById('submit').style.display='inline-block';}
        else {
            document.getElementById('submit').style.display='none';
        }
            }
            
        </script>
        <input type="submit" id="submit"  style="display:inline-block" /><br/>
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
    ?>
</html>
