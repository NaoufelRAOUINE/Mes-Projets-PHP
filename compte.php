<!DOCTYPE html >
<html  lang="fr">
 <head>
<title>Inscription</title>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
input,i,span {
  display: inline-block;
  float: left;
}
#submit{display: none}
a:link{color: red}
a:visited{color:green}
</style>
 </head>
<body>
    <form action="ajouter_compte.php" method="POST">
<h2>Création d'un nouveau compte</h2>
<p>Veuillez remplir tous les champs du formulaire et</p>
<p>Cliquez sur le bouton Envoyer pour valider votre inscription</p>
<label>Nom:</label><input type="text" name="nom" required/><br/>
<label>Prénom:</label><input type="text" name="prenom" required/></br>
<label>Adresse mail:</label><input type="email" name="email" onkeyup="checkMail(this.value)" required/><span id="txtMail"></span><br/>
<label>Login:</label><input type="text" name="log_in" required/><br/>
<label>Mot de passe:</label><input type="password" id="p1" name="pass1"  onkeyup="showHint()" required/><br/>
    <label>Confirmer le mot de passe:</label><input type="password" id="p2" name="pass2" onkeyup="showHint()" required /><span id="txtHint"></span>
<!----><i  id='done' style="color: green;display: none" class="material-icons">done</i><br/>
    <p style="clear: left"><input type="checkbox" name="check" id="checkBox" onclick="calc()"/>j'accepte les conditions visibles
        sur ce <a href="Conditions.pdf" id="lien" target="_blank" onclick="click2()">lien</a>* (Vous devez lire les conditions)</p><br/>
        <script>
            //var value=document.defaultView.getComputedStyle(document.getElementById('lien'),null).color.toString();
     temp=0;  
      pass=0;
         function calc() {
            
             if (document.getElementById('checkBox').checked && temp==1&&pass==1&&mail==1) 
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
          function showHint() {
            
              pass1=document.getElementById('p1').value;
              pass2=document.getElementById('p2').value;
              if(pass1==pass2&&pass1!=''&&pass2!='')
              {
                  document.getElementById('done').style.display='inline-block';
                   document.getElementById('done').style.color='green';
                   pass=1;
                   
              }
              else{
                  document.getElementById('done').style.display='inline-block';
                  document.getElementById('done').style.color='red';
                  pass=0;
                  
              }
              calc();
              
          }
          // fonction pour verifier email
          function checkMail(str) {
               console.log('*');
              
              if (str.length == 0) { 
                  document.getElementById("txtMail").innerHTML="";
                  mail=0;
                  return;
              } else {
                  
                  var xmlhttp = new XMLHttpRequest();
                  xmlhttp.onreadystatechange = function() {
                      if (this.readyState == 4 && this.status == 200) {
                          if(this.responseText=='1')
                          {document.getElementById("txtMail").innerHTML='Email déjà existant !!';
                              document.getElementById("txtMail").style.color='red';
                          mail=0;calc();}
                          else{
                              document.getElementById("txtMail").innerHTML='';
                              mail=1;calc();
                          }
                       }
                  };//?q=" + str ?q=" + same
                 //alert(str);
                  xmlhttp.open("GET", "verif_mail.php?s="+str , true);
              
                  xmlhttp.send();
              }
              
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
