<link href="../style1.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
}
-->
</style><p class="Contenu_Titre1">RPG Maker XP - Script - Lecture Du Script </p>
<?php 
include('connexion.php'); 
$sql=mysql_query("SELECT * from scripts Where id='$_GET[id]'") or die("Erreure ");
$res=mysql_fetch_array($sql);
include($res['lien']);
?>
<hr />
<? 
//boutton suivant 
$sqlr=mysql_query("SELECT * from scripts ") or die("Erreure ");
$num=mysql_numrows($sqlr);
if($_GET['id'] <$num){
  $resp=$res['id']+1 ;
  print'<a href="rpgxp.php?url=script&id='.$resp.'"> Script Suivant >> </a>'; 
  }
   ?>
    <?
 //-afiichage du boutto, menu precedent
 if($_GET['id']>'1'){
 $resp=$res['id']-1 ;
  print'<a href="rpgxp.php?url=script&id='.$resp.'"> &lt;&lt; Script Precedent </a>';
  }
 ?>
<a href="rpgxp.php?url=scripts"><br> &lt;&lt; Retour Liste Des Scripts <br /></a>
<a href="rpgxp.php?url=menu"> &lt;&lt; Retour au Tableau De Bord RPG Maker XP </a>
