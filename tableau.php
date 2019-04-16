<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
 <head>
<title>Exercice sur les fichiers</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>*{margin: 5px}</style>
 </head>
<body>
    <form action="tableau.php" method="POST" enctype="multipart/form-data">
        <?php
        $pays = array('France','Italie','Allemagne','Russie'); 
        $villes['France'][0] = "Paris";
        $villes['France'][1] = "Lyon";
        $villes['France'][2] = "Marseille";
        $villes['Italie'][0] = "Rome";
        $villes['Italie'][1] = "Milan";
        $villes['Italie'][2] = "Naples";
        $villes['Allemagne'][0] = "Berlin";
        $villes['Allemagne'][1] = "Munich";
        $villes['Allemagne'][2] = "Francfort";
        $villes['Russie'][0] = "Moscou";
        $villes['Russie'][1] = "Saint-Pétersbourg";
        $villes['Russie'][2] = "Nizhny-Novgorod";

        ?>
        Choisissez un pays : <select name="pays">
           <?php
            if(isset($_POST['pays']))
            { $pays_selectionne=$_POST['pays'];}
            else{
                $pays_selectionne='France';
            }
           foreach ($pays as $value) {
               if($value==$pays_selectionne){
               echo "<option value='".$value."' selected='selected'>".$value."</option>";}
           else{echo "<option value='".$value."'>".$value."</option>";;}

           
           }
           
            
            ?> 
            
        </select><br/>
        
       
        
         <div>
            <?php
           
                        //echo $pays_selectionne;
                        foreach ($villes as $key => $value1) {
                            if($key==$pays_selectionne)
                            {
                                foreach ($value1 as $value2) {
                                    echo $value2.'<br/>';
                                } 
                            }
            }
            ?>
        </div><br/>
        <input type="submit" name="envoyer" value="valider"/>
    </form>
</body>
</html>