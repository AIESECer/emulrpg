<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>

<link href="style1.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	background-color: #000000;
}
-->
</style></head>

<body>
<table width="800" border="1" align="center" cellpadding="0" cellspacing="1" bordercolor="#666666" bgcolor="#666666">
  <!--DWLayoutTable-->
  <tr>
    <td height="13" colspan="2" valign="top" bgcolor="#666666" class="Section_Titre"><?php $time=date("d-m-Y");
	print'Nous sommes le: ' .$time; ?></td>
  </tr>
  <tr>
    <td height="122" colspan="2" valign="top" bgcolor="#FFFFFF"><div align="center"><img src="images/logo_haut.gif" width="800" height="326" /></div></td>
  </tr>
  
  <tr>
    <td height="19" colspan="2" valign="top" bgcolor="#666666"><span class="Section_Titre">Creation De Jeux </span></td>
  </tr>
  <tr>
    <td width="200" height="406" valign="top" bgcolor="#999999"><p class="Menu_Titre"><?php include('menus/main_menu.htm'); ?>&nbsp;</p>
      <p>&nbsp;</p></td>
    <td width="649" valign="top" bgcolor="#CCCCCC" "><p> <?php
	  if($_GET['url']=='lexique'){
	  include('divers/lexique-rpg.php');
	  } 
	  elseif($_GET['url']=='gstory'){
	  include('divers/game_story.php');
	  }
	   elseif($_GET['url']=='help'){
	  include('divers/help.htm');
	  }
	  else{
	  print'page non disponible';
	  }
	  ?>
	  </p>
      </td>
  </tr>
  <tr>
    <td height="36" colspan="2" valign="top" bgcolor="#666666" class="Section_Titre"><p>Partenaires</p>
    <p>&nbsp;</p>
    <p align="center" class="Bas_Remarque">&copy; Copyright Dev-Jeux </p>
    <p align="center" class="Bas_Remarque">Toute copie ou reproduction doit faire l'objet d'un avartissemet au webmaster et un lien vers  Dev-Jeux.</p>    </td>
  </tr>
</table>
</body>
</html>
