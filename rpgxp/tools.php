<link href="../style1.css" rel="stylesheet" type="text/css">
<p class="Contenu_Titre1">RPG Maker Xp - Utilitaires</p>
<p class="Contenu_Texte">Vous trouverez ici des programmes li&eacute;s a RPG Maker Xp qui vous seront tres utiles. </p>
<?php 
include('connexion.php');

$sql=mysql_query("SELECT * from outils_rpgxp ") or die("Erreure ");
 
//*-----affichage des donnes -----------------------------------///
while($res_tools=mysql_fetch_array($sql)){
print'<span class="Contenu_Titre2">'.$res_tools['titre'].'</span> ';
print'<a href="'.$res_tools['lien'].'">[Telecharger]</a><br>';
print'<span class="Contenu_Texte">'.$res_tools['des'].'</span>';
}
//-------------------------------------------------------------///
mysql_close();
?>