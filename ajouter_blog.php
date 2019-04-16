<?php  session_start();?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Blog</title>
        <style>
            *{margin:10px}
        </style>
    </head>
    <body>
<?php
//header('location:blog.php');

try {
    include 'connection.php';
    if (isset($_POST['titre']) && $_POST['titre'] != "") {
        $titre=htmlentities($_POST['titre'],ENT_QUOTES);
        $texte=htmlentities($_POST['texte'],ENT_QUOTES);

        $title='Photos/';
        if(isset($_FILES['image']['name'])&&$_FILES['image']['error']==0)            
        { $uploadedName = $_FILES['image']['name'];
        $ext = strtolower(substr($uploadedName, strripos($uploadedName, '.')+1));
        $filename = round(microtime(true)).mt_rand().'.'.$ext;
        var_dump($filename);
        $date= new DateTime();
        $sql = "INSERT INTO blog (Titre, Texte, Image, Date,Id_blogueur ) VALUES (:titre, :texte, :image, :date, :id_blogueur)";
        $resultat = $base->prepare($sql);
        $resultat->execute(array('titre' => $titre,'texte' => $texte,'image' => $filename,
            'date' => $date->format('Y-m-d H:i:s') ,'id_blogueur'=>$_SESSION['id']));
        //var_dump($resultat);
        move_uploaded_file($_FILES["image"]["tmp_name"], $title.$filename);
        
             header('Location:afficher_blog.php');
        } 
        else{
             header('Location:blog.php?message=1');
        }/**/
    }
     
    
} catch (Exception $exc) {
    echo $exc->getMessage();
}
?>

</body>
</html>