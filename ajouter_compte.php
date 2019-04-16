<?php
try {
    include 'connection.php';
    $sql = "INSERT INTO login (Login, Password, Email, Nom, Prenom) VALUES
        (:login, :password, :email, :nom, :prenom)";
    $nom= htmlentities($_POST['nom'],ENT_QUOTES);
    $prenom=htmlentities($_POST['prenom'],ENT_QUOTES);
    $email=htmlentities($_POST['email'],ENT_QUOTES);
    $login=htmlentities($_POST['log_in'],ENT_QUOTES);
    $pass=htmlentities($_POST['pass1'],ENT_QUOTES);
    $pass1=htmlentities($_POST['pass2'],ENT_QUOTES);
    
    echo $nom.'<br/> '.$prenom.'<br/> '.$email.' <br/>'.$login.'<br/> '.$pass.'<br/> '.$pass1;
   
    $query = "SELECT * FROM login WHERE email=?";
    $resultat = $base->prepare($query);
    $resultat->execute(array($email));
    $count=$resultat->rowCount();
    echo $count;
    if($count==0&&$pass==$pass1){
$resultat = $base->prepare($sql);
 $resultat->execute(array('login'=>$login , 'password'=>$pass ,'email' => $email, 'nom' => $nom,'prenom' => $prenom));
 
 header('Location:login.php');
 

$resultat->closeCursor();} 
 else {
    header('location:javascript://history.go(-1)');
}/**/
} catch (Exception $exc) {
    echo $exc->getMessage();
}



