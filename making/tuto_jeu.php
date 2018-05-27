<link href="../style1.css" rel="stylesheet" type="text/css" />
<p class="Contenu_Titre1">Creation de jeux  - Tutoriaux</p>
<p class="Contenu_Texte">Voici les tutoriaux tehoriques sur la creation de Jeux-Video de Dev-Jeux ils vous aiderons je l'espere dans votre apprantissage. Pour toute question rapportez vous au forum. </p>
<p class="Contenu_Titre2">Liste des tutoriaux : </p>
<?php 

//-----fichier des données-----------
include('connexion.php'); 
//resqueste
$sql_jeux=mysql_query("SELECT * from tuto_jeux  order by id asc") or die("Erreure ");
?>
<?php 
//*-----affichage des donnes ------------------------------------///
while($res_p1=mysql_fetch_array($sql_jeux)){
print'<a href="making.php?url=lireb&id='.$res_p1['id'].'">'.$res_p1['titre'].'</a><br>';
print'<span class="Contenu_Texte">'.$res_p1['des'].'</span><br>';
}
//-------------------------------------------------------------///
mysql_close();
?>
<hr />
<a href="making.php?url=menu">&lt;&lt; Retour Tableau De Bord Creation De Jeux-Video</a> 




