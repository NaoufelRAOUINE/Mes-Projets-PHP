<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
 <head>
<title>Exercice avec POST</title>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8" />
<style>*{margin: 5px}</style>
 </head>
<body>
<h2>Page de réception du prénom et du nom</h2>
Login : <?php echo $_REQUEST["login"];?><br />
Mot de passe : <?php echo $_POST["pass"];?><br />
Genre:<?php echo $_POST["genre"];?><br />
Nationalité : <?php foreach ($_POST["nat"] as $value) {
     echo $value." ";
} ;?><br/>
Langues Preféres: <?php foreach ($_POST["pays1"] as $value) {
     echo $value." ";
}  ?><br/>
valeur cachée:<?php echo $_POST["champ1"]; ?><br/>
Commentaire : <?php echo $_POST["textarea"]?><br/>
<?php //header("Location:http://www.google.fr")?>
</body>
</html>
