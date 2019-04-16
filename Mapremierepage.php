<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
 <head>
<title>Exercice sur les fichiers</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>*{margin: 5px}</style>
 </head>
<body>
    <img name="Image1" src="image.php" />
 <form action="upload.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="MAX_FILE_SIZE" value="2097152">
<p>Choisissez une photo avec une taille inférieure à  2 Mo.</p>
<input type="file" name="photo">
<br />
<input type="submit" name="ok" value="Envoyer">
 </form>
     <p><a href="get_recoit.php?nom=Dupont&prenom=Jean">appel de
la page get_recoit.php?nom=Dupont&prenom=Jean</a></p>
    <form action="recoit_post.php" method="POST" name="formulaire">
<h2>Formulaire d'envoi général</h2>
Login: <input type="text" name="login" /><br /><br>
Mot de passe: <input type="password" name="pass" /><br />
<br/><!--multiple="multiple"-->
Genre:
<input type="radio" name="genre" value="Masculin" checked>Masculin</input>
<input type="radio" name="genre" value="FÃ©minin">Féminin</input><br>
nationalité: <br/>
<select name="nat[]" >
    <option >Français</option>
    <option >Espagnol</option>
    <option >Russe</option>
</select><br/>
Pays Ã  visiter: <br/>
<select name="pays[]" multiple="multiple">
    <option >France</option>
    <option >Espagne</option>
    <option >Russie</option>
</select><br/>
Langues péferés: <br/>
<input type="checkbox" name="pays1[]" value="FranÃ§ais" checked>Français</input><br/>
<input type="checkbox" name="pays1[]" value="Allemand">Allemand</input><br/>
<input type="checkbox" name="pays1[]" value="Espagnol">Espagnol</input><br/>
<input type="hidden" name="champ1" value="valeur1"/><br/>
Commentaire:<br><textarea name="textarea">Laissez votre commentaire...</textarea>
<br><input type="submit" name="envoyer" value="envoyer" />
<input type="reset" name="reset" value="effacer"/>
</form> 

 </body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$prenom='Naoufel';
$nom='Raouine';
function concatene()
{
    $GLOBALS['prenom']=$GLOBALS['prenom']." ".$GLOBALS['nom'];
   
}
concatene();
echo $prenom.'<br>';
echo $_SERVER['REMOTE_ADDR'].'<br>';// adresse ip
echo $_SERVER['PHP_SELF'].'<br>';//nom de fichier.php
echo $_SERVER['REQUEST_METHOD'].'<br>';
echo $_SERVER['HTTP_ACCEPT_LANGUAGE'].'<br>';
/*if(!isset($_SERVER['PHP_AUTH_USER']))
{
    header('WWW-Authenticate: Basic realm="My Realm"');
 header('HTTP/1.0 401 Unauthorized');
 echo 'Texte si le visiteur utilise le bouton d\'annulation';
 exit; 
}
 else {
    echo "Bonjour, {$_SERVER['PHP_AUTH_USER']}.</br >";
 echo "Votre mot de passe est {$_SERVER['PHP_AUTH_PW']}.</br >"; 
}*/
session_start();
$_SESSION['nom']='Jean';
echo "Le nom en session: ".$_SESSION['nom'].'<br>';
//$session_destroy = session_destroy();
$time_expiration=365*24*3600;
setcookie("nom","Jean",time()+$time_expiration);
if(isset($_COOKIE['nom'])){
    echo "Le nom en cookie: ".$_COOKIE['nom'];
}
