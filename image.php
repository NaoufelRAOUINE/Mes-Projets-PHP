<?php
header("Content-type: image/jpeg");
/*$image=imagecreate(300,150);
$couleur_fond= imagecolorallocate($image, 110, 210, 220);
$noir = imagecolorallocate($image, 0, 0, 0);
imagestring($image, 3, 50, 50, "Voici mon texte.", $noir); 
imagepng($image);
imagecolortransparent($image, $couleur_fond);
imagedestroy($image);
// Création des deux images en tant qu’objet*/
$source = imagecreatefrompng("image1.png"); // Le computer est la source
$destination = imagecreatefromjpeg("mini_Koala.jpg"); // Le Koala est la
// destination
$largeur_source = imagesx($source); //largeur de l’image source
$hauteur_source = imagesy($source); //hauteur de l’image source
$largeur_destination = imagesx($destination); //largeur de l’image
// destination
$hauteur_destination = imagesy($destination); //hauteur de l’image
// destination
// Placement du logo en bas à gauche
$x = 0;
$y = $hauteur_destination - $hauteur_source;
// Placement de l’image source dans l’image de destination
imagecopymerge($destination, $source, $x, $y, 0, 0, $largeur_source,
$hauteur_source,50);
// Affichage de l’image finale
imagejpeg($destination);
imagedestroy($destination); 
/*$image_source = imagecreatefromjpeg("fleur.jpg"); // La source est l’image
// Koala.jpg
$destination = imagecreatetruecolor(500, 700); // Création de la miniature
// vide
$largeur_source = imagesx($image_source); // retourne la largeur de l’image
$hauteur_source = imagesy($image_source); // retourne la hauteur de l’image
$largeur_destination = 500;
$hauteur_destination = 700;
// Création de la miniature
imagecopyresampled($destination, $image_source, 0, 0, 0, 0,
$largeur_destination, $hauteur_destination, $largeur_source,
$hauteur_source);
// Enregistrement de la miniature sous le nom "mini_Koala.jpg"
imagejpeg($destination, 'mini_Koala.jpg');
echo "Affichage de la miniature: <img src='mini_Koala.jpg'
name='miniature' />";
imagedestroy($image_source); */

