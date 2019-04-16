<?php  session_start();?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8" lang="fr">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog</title>
        
             <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
           <style>
            /**{margin:10px;text-align: center;}
            body{margin: auto;width: 80%;}*/
            a:link,a:visited,a:active{color: black}
           .container,h1{text-align: center}
           .page-header {
            padding-bottom: 9px;
            margin: 40px 0 20px;
            border-bottom: 1px solid #eee;
             }
             a img{border:none;height: 50px;width: 50px;position: fixed;bottom: 20px;right: 20px;}
        </style>
         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <header class="page-header">
            <h1>Blog</h1>
            </header>
        
            <section class="row">
        <?php
        include './cryptage.php';
       
        try
{
 include 'connection.php';
 //ORDER BY blog.Id DESC
 $sql='SELECT blog.Id,blog.Id_blogueur,Titre,Texte,Image,Date,Login FROM blog JOIN login ON login.Id=blog.Id_blogueur ORDER BY blog.Id DESC';
 $resultat = $base->query($sql);
 //echo "Nombre de personnes : ".$resultat->rowCount();
 // Affichage de chaque entrée une à une
 $title='Photos/';
 while ($donnees = $resultat->fetch())
 {
     
 ?>
        
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
        <p>   <?php echo $donnees['Titre']; ?></p>
        <p style="color:graytext;font-style: italic">écrit par:   <?php echo $donnees['Login'];?></p>
        <p>   <?php echo date("d/m/Y", strtotime($donnees['Date'])); ?></p>
        <p>   <?php echo $donnees['Texte']; ?></p>
        <img src="<?php echo $title.$donnees['Image']?>" alt="erreur" style="width:250px;height:250px;"><br/>
        
        <?php 
                    



            
            if(isset($_SESSION['id'])&&$_SESSION['id']==$donnees['Id_blogueur']){
                
                $encrypted = doEncrypt($donnees['Id']);
                echo '<a href="supprimer_blog.php?id='.urlencode($encrypted).'"><i class="material-icons">delete</i></a>';
                echo '<a href="blog2.php?id='.urlencode($encrypted).'&titre='.$donnees['Titre'].'&texte='.$donnees['Texte']
                        .'&image='.$donnees['Image'].'"><i class="material-icons">mode_edit</i></a>';
            }?>
                </div>
            
            <!--<hr>-->
             <?php
             }
             
             $resultat->closeCursor(); // Fermeture de la requête
            }
            catch(Exception $e)
            {
             // message en cas d’erreur
             die('Erreur : '.$e->getMessage());
            } ?>
            </section>
            <?php
            if(isset($_SESSION['login']))
            {echo '<a  href="blog.php">Retour à la page d\'insertion</a>';}
             else {
                echo '<a  href="login.php">Retour à la page d\'insertion</a>';
            }

              ?>
            
                
            <br /><!---->
            <?php
            if(isset($_SESSION['login'])){
            echo"<input type='button'  value='Déconnexion' onclick='deconnexion()'/>";
            }?>
            <script type="text/javascript">
                function deconnexion() {
                window.location.replace("Logout.php");
            }
            </script>


             <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
            <a href="#">
            <img title="Back to Top" src="https://cdn.dribbble.com/assets/icon-backtotop-1b04df73090f6b0f3192a3b71874ca3b3cc19dff16adc6cf365cd0c75897f6c0.png" alt="Icon backtotop"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
            </a>
        </div>
    </body>
</html>
