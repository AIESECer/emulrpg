<link href="../style1.css" rel="stylesheet" type="text/css" />
<p class="Contenu_Titre1">RPG Maker Xp - Tutoriaux a theme </p>
<p class="Contenu_Texte">Voici les tutoriaux a theme RPG Maker Xp de Dev-Jeux ils vous aiderons je l'espere dans vos creations. Pour toute question rapportez vous au forum. </p>
<p class="Contenu_Titre2">Liste des tutoriaux : </p>
<?php 

//-----fichier des donn�es-----------
include('connexion.php'); 
//resqueste
$sql_jeux=mysql_query("SELECT * from tuto_xp  order by id asc") or die("Erreure ");
?>
<?php 
//*-----affichage des donnes ------------------------------------///
while($res_p1=mysql_fetch_array($sql_jeux)){
print'<a href="rpgxp.php?url=lireb&id='.$res_p1['id'].'">'.$res_p1['titre'].'</a><br>';
print'<span class="Contenu_Texte">'.$res_p1['des'].'</span><br>';
}
//-------------------------------------------------------------///
mysql_close();
?>
<hr />
<a href="rpgxp.php?url=menu"> &lt;&lt; Retour au Tableau De Bord RPG Maker XP</a>




