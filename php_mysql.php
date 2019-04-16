<?php
// Connexion à la base de données
//$base = mysqli_connect("127.0.0.1", "root", "", "bdd_nraouine");
try {
    $base=new PDO('mysql:host=127.0.0.1;dbname=bdd_nraouine', 'root', '');
    $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $stmt=$base->prepare("Call creation_personne(?,?,?)");
    $nom='DEVERS';
    $prenom='Gilles';
    $age=40;
    $stmt->bindParam(1, $nom, PDO::PARAM_STR,20);
    $stmt->bindParam(2, $prenom, PDO::PARAM_STR, 20);
    $stmt->bindParam(3, $age, PDO::PARAM_INT); 
     $stmt->execute();
      echo "La procédure a inséré une nouvelle personne."; 
} catch (Exception $exc) {
    die('Erreur: '.$exc->getMessage());
}
 finally {
$base=null;    
}
?>