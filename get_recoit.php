<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
 <head>
<title>Exercice avec GET</title>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8" />
 </head>
<body>
<?php
if(isset($_GET["nom"])&&isset($_GET["prenom"])){
echo "Le nom reçu est : ".$_GET["nom"]."<br />";
echo "Le prénom reçu est : ".$_GET["prenom"]."<br />";}
 else {
    echo'Le nom ou le prénom est faux';
}
?>
</body>
</html>