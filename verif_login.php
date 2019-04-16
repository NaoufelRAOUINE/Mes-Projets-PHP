<?php  session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
 <head>
<title>Connexion</title>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8" />
<style>*{margin: 5px}</style>
 </head>
<body>
<h2>Connexion Rééussite</h2>
 <?php

if(isset($_POST["login"])&&isset($_POST["pass"])){
    
     try { 
         $login= ($_POST["login"]);
         $pass= ($_POST["pass"]);
         $query = "SELECT Id FROM login WHERE Login=? and Password=?";
         $base=new PDO('mysql:host=127.0.0.1;dbname=bdd_nraouine', 'root', '');
         $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
         $resultat = $base->prepare($query);
         $resultat->execute(array($login,$pass));
         while ($ligne = $resultat->fetch())
 {
            $_SESSION['id']=$ligne['Id'];
 }
 $resultat->closeCursor(); 

         $count=$resultat->rowCount();
        if($count==1)
       {    
              $_SESSION['login'] = $login;
              //echo '<h1>Bienvenue '.$login.'</h1>';
              header("Location:blog.php");

       }
       else{
           header("Location:login.php?message=1");
       }
     } catch (Exception $exc) {
         die('Erreur:'.$exc->getMessage()) ;
}}
 else {
    header("Location:login.php?message=1");
}
//' OR 1=1 OR '

?><br />
<input type="button"  value="Déconnexion" onclick="deconnexion()"/>
<script type="text/javascript">
    function deconnexion() {
    window.location.replace("Logout.php");
}
</script>
</body>
</html>
