<!--
/*
    @author Antoine BARBIN
*/
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Tennis de Table</title>
        <link rel="stylesheet" href="vue/style.css" /> 
		<style type="text/css"> 
		table {
			border-collapse: collapse;
		}
		</style>
        
    </head>
    <body>
            <form method="POST" action="#">
			
             <img src="../CSS/Images/image1.jpg" alt="LOGO Conseil Général de Maine et Loire">  <img src="../CSS/Images/image2.jpg" alt="Anjou Ping 49"> 
			
                <div id='titre'>
                    <h1>COMITE DE MAINE & LOIRE DE TENNIS DE TABLE</h1>
					<h1>CHAMPIONNAT JEUNE</h1>
                </div>
            
                <div id='FD_partie1'>
				
                    <p class="arbitre">NOM, PRENOM DU JUGE-ARBITRE : <input type="text" name="arbitre" /> </p>
					
					<p class="lieu">LIEU DE LA RENCONTRE : BRAIN SUR L'AUTHION</p> <p class="date">DATE : <input type="text" name="date" /> </p><p class="heure">HEURE : <input type="text" name="heure" /></p>
										
					<p class="division">DIVISION : </p> <!-- Liste déroulante php catégories --> 
					<p class="poule">POULE : <input type="text" name="POULE" /></p>
					
					<select name="Sexe" size="1">
						<option>POUSSINS/BENJAMINS
						<option>MINIMES/CADETS
						<option>CADETS/JUNIORS
						<option>BENJAMINES/MINIMES FILLES
					</select>
					
                </div>
				
				<div id="FD_partie2">
				<div  class="EQUIPE_1">
					<table name="EQUIPE_1" border="1">
						<tr>
							<td colspan="3"><input type="number" size="7" name="idClub"> <p>CLUB : </p><input type="text" name="Club1" />
						</tr>
						<tr>
							<td>N° de LICENCE</td>
							<td>NOM - PRENOM(en entier)</td>
							<td>POINTS</td>
						</tr>
						<!-- Boucle FOR php ? -->
						<tr>
							<td><input type="number" size="7" name="idJoueur"></td>
							<td>A <select name="JoueurA" size="1">
									<!-- Liste déroulante php catégories -->
									
							</select></td>
							<td><input type="number" size="7" name="nbPoint"></td>
						</tr>
						<tr>
							<td><input type="number" size="7" name="idJoueur"></td>
							<td>B <select name="JoueurB" size="1">
									<!-- Liste déroulante php catégories -->
									
							</select></td>
							<td><input type="number" size="7" name="nbPoint"></td>
						</tr>
						<tr>
							<td><input type="number" size="7" name="idJoueur"></td>
							<td>C <select name="JoueurC" size="1">
									<!-- Liste déroulante php catégories -->
									
							</select></td>
							<td><input type="number" size="7" name="nbPoint"></td>
						</tr>									
					</table>
					</div>
					<div  class="Cap_1">
					</br>
					<table name="Cap_1" border="1">
						<tr>
							<td>CAPITAINE EQUIPE - A</td>							
						</tr>
						<tr>
							<td>NOM : </td><!-- Joueur A -->
						</tr>
					</table>
					</div>
					</br>
					<div class="EQUIPE_2">
					<table name="EQUIPE_2" border="1">
						<tr>
							<td colspan="3"><input type="number" size="7" name="idClub"> <p>CLUB : </p><input type="text" name="Club1" />
						</tr>
						<tr>
							<td>N° de LICENCE</td>
							<td>NOM - PRENOM(en entier)</td>
							<td>POINTS</td>
						</tr>
						<!-- Boucle FOR php ? -->
						<tr>
							<td><input type="number" size="7" name="idJoueur"></td>
							<td>X <select name="JoueurX" size="1">
									<!-- Liste déroulante php catégories -->
									
							</select></td>
							<td><input type="number" size="7" name="nbPoint"></td>
						</tr>
						<tr>
							<td><input type="number" size="7" name="idJoueur"></td>
							<td>Y <select name="JoueurY" size="1">
									<!-- Liste déroulante php catégories -->
									
							</select></td>
							<td><input type="number" size="7" name="nbPoint"></td>
						</tr>
						<tr>
							<td><input type="number" size="7" name="idJoueur"></td>
							<td>Z <select name="JoueurZ" size="1">
									<!-- Liste déroulante php catégories -->
									
							</select></td>
							<td><input type="number" size="7" name="nbPoint"></td>
						</tr>					
					</table>
					</div>
					</br>
					<div class="Cap_2">
					<table name="Cap_2" border="1">
						<tr>
							<td>CAPITAINE EQUIPE - W</td>							
						</tr>
						<tr>
							<td>NOM : </td><!-- Joueur W -->
						</tr>
					</table>
					</div>
				</div>
				
				<div id="FD_partie3">
				</br>
					<table border="1">
						<tr>
							<td colspan="4" rowspan="2">ORDRE DES PARTIES</td>
							<td colspan="5">SCORES</td>
							<td colspan="2">POINTS</td>
						</tr>
						<tr>
							<td>1</td>
							<td>2</td>
							<td>3</td>
							<td>4</td>
							<td>5</td>
							<td>A</td>
							<td>X</td>
						</tr>
						<tr>
							<td>A</td>
							<td> <!-- NOM JOUEUR A --> </td>
							<td>X</td>
							<td> <!-- NOM JOUEUR W --> </td>
							
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" min="0" max="1" maxlength="1" size="1"></td>
						</tr>
						<tr>
							<td>B</td>
							<td> <!-- NOM JOUEUR B --> </td>
							<td>Y</td>
							<td> <!-- NOM JOUEUR X --> </td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" min="0" max="1" maxlength="1" size="1"></td>
						</tr>
						<tr>
							<td>C</td>
							<td> <!-- NOM JOUEUR  --> </td>
							<td>Z</td>
							<td> <!-- NOM JOUEUR  --> </td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" min="0" max="1" maxlength="1" size="1"></td>
						</tr>
						<tr>
							<td>B</td>
							<td> <!-- NOM JOUEUR  --> </td>
							<td>X</td>
							<td> <!-- NOM JOUEUR  --> </td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" min="0" max="1" maxlength="1" size="1"></td>
						</tr>
						
						
						
						<tr>
							<td>Dble</td>
							<td> 
								<select name="DblA">
									<option> A - B
									<option> A - C
									<option> B - C
								</select>
							</td>
							<td>Dble</td>
							<td> 
								<select name="DblA">
									<option> X - Y
									<option> X - Z
									<option> Y - Z
								</select>
							</td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" min="0" max="1" maxlength="1" size="1"></td>
						</tr>
						
						
						<tr>
							<td>A</td>
							<td> <!-- NOM JOUEUR  --> </td>
							<td>Z</td>
							<td> <!-- NOM JOUEUR  --> </td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" min="0" max="1" maxlength="1" size="1"></td>
						</tr>
						<tr>
							<td>C</td>
							<td> <!-- NOM JOUEUR  --> </td>
							<td>Y</td>
							<td> <!-- NOM JOUEUR  --> </td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" min="0" max="1" maxlength="1" size="1"></td>
						</tr>
						
						<tr>
							<td>B</td>
							<td> <!-- NOM JOUEUR A --> </td>
							<td>Z</td>
							<td> <!-- NOM JOUEUR W --> </td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" min="0" max="1" maxlength="1" size="1"></td>
						</tr>
						<tr>
							<td>C</td>
							<td> <!-- NOM JOUEUR B --> </td>
							<td>X</td>
							<td> <!-- NOM JOUEUR X --> </td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" min="0" max="1" maxlength="1" size="1"></td>
						</tr>
						<tr>
							<td>A</td>
							<td> <!-- NOM JOUEUR  --> </td>
							<td>Y</td>
							<td> <!-- NOM JOUEUR  --> </td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" maxlength="2"></td>
							<td><input type="number" name="score" min="0" max="1" maxlength="1" size="1"></td>
						</tr>
						
						<tr>
							<td colspan="4">La feuille de rencontre est expédié par le club qui reçoit.</td>
							<td colspan="5">TOTAL DE CHAQUE EQUIPE</td>
							<td><input type="number" name="score" min="0" max="18" maxlength="2" size="1"></td>
							<td><input type="number" name="score" min="0" max="18" maxlength="2" size="1"></td>
						</tr>
					</table>
				</div>
				<div id="FD_partie4">
					<h3>RESULTAT</h3>
					<table border="1">
						<tr>CLUB : <?php echo $_POST['club1']; ?></tr>
					</table>
					
					<table border="1">
						<tr>CLUB : <?php echo $_POST['club2']; ?></tr>
					</table>
					
					<h4>SIGNATURE DU JUGE-ARBITRE</h4>
					<table border="1">
						<tr rowspan="2">JOURNÉE N°</tr>						
					</table>
				</div>
				
            </form>
    </body>
</html>




