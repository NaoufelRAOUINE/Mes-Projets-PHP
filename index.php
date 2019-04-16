<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercice 1</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    </head>
    <body>

        <script>
            var taille = $('#p1').css('fontSize');
            
            $(document).ready(function() {
                $("#p1").click(function(){
                    if ( $(this).css('fontSize') == taille) {
                        $(this).css('fontSize', (taille + 100));
                    }
                    else {
                        $(this).css('fontSize', taille);
                    }
                    
                })
            })
            
        
        </script>
        <p>Créé un texte qui s'agrandit au clic. Si on reclique dessus, il reprend sa taille d'origine. Pour pouvoir faire cela, il va falloir que tu mette la taille de police initiale dans une variable.</p>

        <p id="p1">Hello world !!</p>
        


        <?php
        // put your code here
        ?>
    </body>
</html>
