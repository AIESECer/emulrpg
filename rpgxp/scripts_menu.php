<link href="../style1.css" rel="stylesheet" type="text/css" />
<p class="Contenu_Titre1">RPG Maker Xp - Scripts </p>
<p class="Contenu_Texte">Voici les scripts RPG Maker Xp disponibles sur Dev-Jeux. Ils vous permeterons d'ajouter des fonctionnalitées a votre jeux que vous pensiez jusque la inaccessible. Normalement tous les scripts presents sont test&eacute;s et fonctionneles si toute fois vous constattez qu'un scripte ne marche pas veillez me le faire signaler sur la page de contatc. </p>
<p class="Contenu_Titre2">Liste des Scripts: </p>
<?php 

//-----fichier des données-----------
include('connexion.php'); 
//resqueste
$sql_jeux=mysql_query("SELECT * from scripts order by id asc") or die("Erreure ");
?>
<?php 
//*-----affichage des donnes ------------------------------------///
while($res_p1=mysql_fetch_array($sql_jeux)){
print'<a href="rpgxp.php?url=script&id='.$res_p1['id'].'">'.$res_p1['titre'].'</a><br>';
}
//-------------------------------------------------------------///
mysql_close();
?>
<hr />
<a href="rpgxp.php?url=menu"> &lt;&lt; Retour au Tableau De Bord RPG Maker XP</a>




