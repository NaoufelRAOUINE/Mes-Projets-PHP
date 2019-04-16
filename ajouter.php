<?php
try {
    include 'connection.php';
    $sql = "INSERT INTO formulaire (Nom, Prenom, Formation, Date_entree, Date_sortie, Email ) VALUES
        (:nom, :prenom, :formation, :date_e, :date_s, :email)";
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $formation=$_POST['formation'];
    $date_entree=$_POST['date_entree'];
    $date_sortie=$_POST['date_sortie'];
    $email=$_POST['email'];
    $check=$_POST['check'];
    $c1=$date_sortie>$date_entree;
    $query = "SELECT * FROM formulaire WHERE email=?";
    $resultat = $base->prepare($query);
    $resultat->execute($email);
    $count=$resultat->rowCount();
    if($check=='on'&&$c1&&$count==0){
$resultat = $base->prepare($sql);
 $resultat->execute(array('nom' => $nom,'prenom' => $prenom,'formation' => $formation,
'date_e' => $date_entree,'date_s' => $date_sortie,'email' => $email));/*
    $lien=$_POST['nom'];
    session_start();
    $_SESSION['varname'] = $_GET['name'];
    */
 header('Location:acceuil.php?message=1');
 

$resultat->closeCursor();} 
 else {
    header('location:javascript://history.go(-1)');
}/**/
} catch (Exception $exc) {
    echo $exc->getMessage();
}



