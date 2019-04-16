<?php
session_start();
?>
<!DOCTYPE html >
<html lang="fr">
 <head>
<title>Connexion</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
    
    *{margin: 10px}
    label{
    display: inline-block;
    float: left;
    clear: left;
    width: 250px;
    text-align: left;
}
input {
  display: inline-block;
  float: left;
}
#connexion,#creer{clear: both;}
</style>
 </head>
<body>
    <h2>Veuillez saisir votre login et votre mot de passe</h2>
    <form action="verif_login.php" method="POST" name="formulaire">
        <label>Login: </label><input type="text" name="login" /><br /><br>
        <label>Mot de passe: </label><input type="password" name="pass" /><br />
        <input id="connexion" type="submit" value="Connexion"/><br></br>
    </form>
    <form action="compte.php" method="POST" name="formulaire">
        <input id="creer" type="submit" value="Créer un nouveau compte"/><br/>
    </form>
<br/>
</body>
</html>



<?php

if (isset($_GET['message'])&&$_GET['message']==1) {
 echo "<span style=color:#ff0000>Login incorrect</span>";

} 


