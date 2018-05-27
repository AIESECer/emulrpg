<link href="../style1.css" rel="stylesheet" type="text/css">
<span class="Contenu_Titre1">RPG Maker XP - Tutoriaux a Theme - Lecture Du Tutorial</span><br />
<?php 
include('connexion.php'); 
$sql=mysql_query("SELECT * from tuto_xp Where id='$_GET[id]'") or die("Erreure ");
$res=mysql_fetch_array($sql);
include($res['lien']);
?>

<hr />
 
  <? 
//boutton suivant 
$sqlr=mysql_query("SELECT * from tuto_xp ") or die("Erreure ");
$num=mysql_numrows($sqlr);
if($_GET['id'] <$num){
  $resp=$res['id']+1 ;
  print'<a href="rpgxp.php?url=lireb&id='.$resp.'"> Tutorial Suivant >> </a>'; 
  }
   ?>
   <?
 //-afiichage du boutto, menu precedent
 if($_GET['id']>'1'){
 $resp=$res['id']-1 ;
  print'<a href="rpgxp.php?url=lireb&id='.$resp.'"> &lt;&lt; Tutorial Precedent </a>';
  }
 ?>
 
  <br>
  <a href="rpgxp.php?url=tuto">&lt;&lt; Retour Menu Des Tutoriaux A Theme</a><br /> 
  <a href="rpgxp.php?url=menu">&lt;&lt; Retour Tableau De Bord RPG Maker XP</a> 
