<!--
/*
    @author Antoine BARBIN / Simon CHATELAIN
    @source w3schools.com + un ancien projet
    le 08/06/2016
*/
-->
<?php

function set_nouveaujoueur($idjou, $numlicjou, $nomjou, $pnomjou, idcatjou)
{
    global $bdd;
           
    $req = $bdd->prepare("INSERT INTO joueur(idjou, numlicjou, nomjou, pnomjou, idcatjou) Values('".$idjou."' , '".$numlicjou."' , '".$nomjou."', '".$pnomjou."', '".idcatjou."') ");
	$req->execute();

        
}