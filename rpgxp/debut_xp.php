<link href="../style1.css" rel="stylesheet" type="text/css">


<?php 
include('connexion.php');
$sql_p1=mysql_query("SELECT * from debut_xp where partie='1' order by id asc") or die("Erreure ");
$sql_p2=mysql_query("SELECT * from debut_xp Where partie='2' order by id asc") or die("Erreure ");
?>
<link href="../style1.css" rel="stylesheet" type="text/css" />
<p class="Contenu_Titre1">RPG Maker XP - Debuter RPG Maker XP</p>
<p class="Contenu_Texte">Voici une liste de cours qui a pour but de vous apprendre a utiliser le logiciel RPG Maker Xp. Cette section se compose de deux parties qui sonr les bases et l'utilisation avance que vous devez comprendre et assimiller parfaitement.</p>
<p class="Contenu_Titre2">Partie I : Les bases </p>
  <?php 
//*-----affichage des donnes parte1------------------------------------///
while($res_p1=mysql_fetch_array($sql_p1)){
print'<a href="rpgxp.php?url=lire&id='.$res_p1['id'].'">'.$res_p1['titre'].'</a><br>';
print'<span class="Contenu_Texte">'.$res_p1['des'].'</span><br>';
}
//-------------------------------------------------------------///
?>
<p class="Contenu_Texte">Voila vous connaissez l'essentiel de RPG Maker XP nous pouvons passer a la partie II. </p>
<p class="Contenu_Titre2">Parie II : Utilisation avanc&eacute;e</p>
<?php 
//*-----affichage des donnes parte2------------------------------------///
while($res_p2=mysql_fetch_array($sql_p2)){
print'<a href="rpgxp.php?url=lire&id='.$res_p2['id'].'">'.$res_p2['titre'].'</a><br>';
print'<span class="Contenu_Texte">'.$res_p2['des'].'</span><br>';
}
//-------------------------------------------------------------///
?>
<?php mysql_close();?>
<p class="Contenu_Texte">Voila apres ca vous pouvez faire a peu pres n'importe quel RPG et utiliser les tutoriaux a theme. </p>
<hr />
<a href="rpgxp.php?url=menu">&lt;&lt; Retour Tableau De Bord RPG Maker XP</a>

