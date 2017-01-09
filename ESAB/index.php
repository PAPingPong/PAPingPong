<head>
	<link rel="stylesheet" href="vue/style.css" />
</head>
<?php
/**
*La gestion des differentes pages*
*Author : Simon, antoine*
**/

session_start();

include_once('modele/connexionbdd.php');

include_once("vue/vue_header.php");

if (!isset($_GET['section']) OR $_GET['section'] == 'Accueil')
{
    include_once('controleur/accueil.php');
}
elseif ($_GET['section'] == 'FeuilleJeune')
{  
	include_once('controleur/feuilleJeune.php');
}
elseif ($_GET['section'] == 'FeuilleDivision')
{  
	include_once('controleur/feuilleDivision.php');
}	
elseif ($_GET['section'] == 'FeuilleLoisir')
{  
	include_once('controleur/feuilleLoisir.php');
}
elseif ($_GET['section'] == 'Adminsitration')
{  
	include_once('controleur/administration.php');
}
elseif ($_GET['section'] == 'Visualiser')
{  
	include_once('controleur/visualiser.php');
}


include_once("vue/vue_footer.php");
?>