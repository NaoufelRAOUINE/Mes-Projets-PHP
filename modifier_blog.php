<?php
include './cryptage.php';

try {
    include './connection.php';
    $id=doDecrypt($_POST['id']);
    $titre= htmlentities($_POST['titre'],ENT_QUOTES);
    $texte=htmlentities($_POST['texte'],ENT_QUOTES);
    if($_FILES['image']['name']!=null)
    {
        $uploadedName = $_FILES['image']['name'];
        $ext = strtolower(substr($uploadedName, strripos($uploadedName, '.')+1));
        $filename = round(microtime(true)).mt_rand().'.'.$ext;
    
    }
    else {$filename=$_POST['old_image'];}
    //echo $_POST['old_image'].isset($_FILES['image']['name']);
    /*echo $id.' '.$texte.' '.$titre.'<br/> '.$filename.''. strlen($titre).'<br/> ';*/
    $sql = "UPDATE blog SET Titre=?, Texte =?,Image=? WHERE Id =?";
        $resultat = $base->prepare($sql);
        $resultat->execute(array($titre,$texte,$filename,$id));
         if(isset($_FILES['image']['tmp_name'])){
         move_uploaded_file($_FILES["image"]["tmp_name"], 'Photos/'.$filename);}
        
             header('Location:afficher_blog.php');
} 

catch (Exception $exc) {
    echo $exc->getMessage();
}


