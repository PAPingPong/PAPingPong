<!--
/*
    @author Antoine BARBIN / Simon CHATELAIN
    @source w3schools.com + un ancien projet
    le 08/06/2016
*/
-->
<?php

function get_feuillejou($nomjou)
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM feuille, joufeu, joueur WHERE feuille.idfeu = joufeu.idfeu AND joufeu.idjou = joueur.idjou AND joueur.nomjou='".$nomjou."' ");
	$req->execute();
    $feuille = $req->fetchAll();
        
    return $feuille;
}
function get_feuillecat($idcat)
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM feuille WHERE idcat='".$idcat."'");
	$req->execute();
    $feuille = $req->fetchAll();
        
    return $feuille;
}

function get_joueur()
{
    global $bdd;
           
    $req = $bdd->prepare("SELECT * FROM joueur WHERE ");
	$req->execute();
    $joueur = $req->fetchAll();
        
    return $joueur;
}

