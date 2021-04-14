<?php
//Créer un nombre aléatoire entre 0 et 30 et qui soit un multiple de 5 puis affichez le ! 
$x = rand(0,30);
if ($x%5 == 0)
{
    echo "$x";
}
else
{
   echo "Faux";
}

?>