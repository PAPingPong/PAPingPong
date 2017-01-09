
<?php
/**
*Connexion à la base de données*
*Author : Simon*
**/
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=ESAB', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}



