<!DOCTYPE html >
<html  lang="fr">
 <head>
<title>Acceuil</title>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8" />
<style>*{margin: 5px}
    h2{margin-bottom: 30px}
h2,p,label{color:red}
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
#submit{display: none}
a:link{color: red}
a:visited{color:green}
</style>
 </head>
<body>
    <form action="ajouter.php" method="POST">
<h2>Bienvenue sur le site d'inscription "Formations pour tous"</h2>
<p>Veuillez remplir tous les champs du formulaire et</p>
<p>Cliquez sur le bouton Envoyer pour valider votre inscription</p>
<label>Nom:</label><input type="text" name="nom"/><br/>
    <label>Prénom:</label><input type="text" name="prenom"/></br>
    <label>Intitulé de la formation:</label><input type="text" name="formation"/><br/>
    <label>Date de début de la formation:</label><input type="date" name="date_entree"/><br/>
    <label>Date de fin de la formation:</label><input type="date" name="date_sortie"/><br/>
    <label>Adresse mail:</label><input type="email" name="email"/><br/>
    <p style="clear: left"><input type="checkbox" name="check" id="checkBox" onclick="calc()"/>j'accepte les conditions visibles
        sur ce <a href="Conditions.pdf" id="lien" target="_blank" onclick="click2()">lien</a></p><br/>
        <script>
            //var value=document.defaultView.getComputedStyle(document.getElementById('lien'),null).color.toString();
      temp=0;      
         function calc() {
            
             if (document.getElementById('checkBox').checked && temp==1) 
  {
      document.getElementById('submit').style.display='inline-block';
      //return(1);
  } else {
      document.getElementById('submit').style.display='none';
      //return(2);
  }
  } 
         function click2() {
             
             temp= 1;
             calc();
    
}
            

           
  
        </script>
        <label></label><input type="submit" value='Envoyer' id="submit"  /></br>
</form>
  <?php

if (isset($_GET['message'])&&$_GET['message']==1) {
 echo "<span style=color:#ff0000>Votre inscription a été enregistrée.</span>";
 
 
} ?>
</body>
</html>
