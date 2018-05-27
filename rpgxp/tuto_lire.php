<link href="../style1.css" rel="stylesheet" type="text/css">
<?php 
include('connexion.php');  
$sql=mysql_query("SELECT * from debut_xp Where id='$_GET[id]'") or die("Erreure ");
$res=mysql_fetch_array($sql);
?>
<DIV class="Contenu_Titre1">RPG Maker XP - Tutoriaux Pour Debuter - <?php print $res['titre']; ?></div>
<DIV class="Contenu_Texte"><?php print $res['des']; ?></DIV><br/>
<DIV align="center">
<?php 
//boutton suivant 
$sqlr=mysql_query("SELECT * from debut_xp ") or die("Erreure ");
$num=mysql_numrows($sqlr);
if($_GET['id'] <$num){
  $resp=$res['id']+1 ;
  print'<a href="rpgxp.php?url=lire&id='.$resp.'"> Tutorial Suivant >> </a>'; 
  }
   ?>
   
    <?
 //-afiichage du boutto, menu precedent
 if($_GET['id']>'1'){
 $resp=$res['id']-1 ;
  print'<a href="rpgxp.php?url=lire&id='.$resp.'"> &lt;&lt; Tutorial Precedent </a>';
  }
 ?>
<a href="rpgxp.php?url=debut"><br> 
[ Retour au sommaire des Tutoriaix pour debuter ]<br />
</a>
<a href="rpgxp.php?url=menu"> [ Retour au menu RPG Maker XP ] </a></DIV>
<hr>
  <?php 
include($res['lien']);
?>

<hr />
<div align="center">
<? 
//boutton suivant 
$sqlr=mysql_query("SELECT * from debut_xp ") or die("Erreure ");
$num=mysql_numrows($sqlr);
if($_GET['id'] <$num){
  $resp=$res['id']+1 ;
  print'<a href="rpgxp.php?url=lire&id='.$resp.'"> Tutorial Suivant >> </a>'; 
  }
   ?>
   
    <?
 //-afiichage du boutto, menu precedent
 if($_GET['id']>'1'){
 $resp=$res['id']-1 ;
  print'<a href="rpgxp.php?url=lire&id='.$resp.'"> &lt;&lt; Tutorial Precedent </a>';
  }
 ?>
<a href="rpgxp.php?url=debut"><br> 
[ Retour au sommaire des Tutoriaix pour debuter ]<br />
</a>
<a href="rpgxp.php?url=menu"> [ Retour au menu RPG Maker XP ] </a>
</div>
