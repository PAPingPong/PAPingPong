
<?php
/**
*Connexion � la base de donn�es*
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



