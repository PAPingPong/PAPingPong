<!--
/*
    @author Antoine BARBIN
*/
-->

<html>
    <head>
        <title>Tennis de Table</title>
        <!-- <link rel="stylesheet" href="vue/style.css" /> -->
        
    </head>
    <body>
		<div id='visualiser'>
            <!-- boucle affichant les feuilles de matchs -->
			<?php
                    //affichage des sponsors
                    foreach($feuille as $feu)
                    {	
						$nomSponsor=$sponsor['NomSponsor'];
						$imgSponsor=$sponsor['ImgSponsor'];
						$lienSponsor=$sponsor['LienSponsor'];
						
						echo '<li><a href="'.$lienSponsor.'" target="_blank"><img src="'.$imgSponsor.'" alt="'.$nomSponsor.'"></a></li>' ;			
                    }
				?>       
			
        </div>
    </body>
</html>




