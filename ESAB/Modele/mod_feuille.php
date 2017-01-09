<?php

// fonction récupérant les données rentrées dans les champs et les insérant dans la base de données.
function set_nouveaufeuille($idfeu, $lienfeu, $idcat)
{
    global $bdd;
           
    $req = $bdd->prepare("INSERT INTO feuille(idfeu, lienfeu, idcat) Values('".$idfeu."' , '".$lienfeu."' , '".$idcat."') ");
	$req->execute();

        
}
