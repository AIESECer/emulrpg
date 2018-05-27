<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>

<link href="style1.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Style1 {color: #FFFFFF}
-->
</style>
</head>

<body>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <!--DWLayoutTable-->
  <tr>
    <td width="17" rowspan="3" valign="top" bgcolor="#EEEEEE"><!--DWLayoutEmptyCell-->&nbsp;</td>
    <td height="19" colspan="3" valign="top" bgcolor="#999999" class="Section_Titre"><?php $time=date("d-m-Y");
	print'Nous sommes le: ' .$time; ?></td>
  <td width="21" rowspan="3" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
  </tr>
  <tr>
    <td height="326" colspan="3" valign="top" bgcolor="#FFFFFF"><!--DWLayoutEmptyCell-->&nbsp;</td>
  </tr>
  
  
    <tr>
    <td width="147" height="684" valign="top" bgcolor="#C1D7C8"><?php include('menus/main_menu.htm'); ?></td>
    <td width="57" valign="top" bgcolor="#FFFFFF"><span class="Style1">_______</span></td>
    <td width="558" valign="top" bgcolor="#FFFFFF">       
	<?php
	  if($_GET['url']=='menu'){
	  include('menu_rpgxp.php');
	  } 
	  elseif($_GET['url']=='debut'){
	  include('rpgxp/debut_xp.php');
	  }
	  elseif($_GET['url']=='lire'){
	  include('rpgxp/tuto_lire.php');
	  }
	  elseif($_GET['url']=='lireb'){
	  include('rpgxp/lire_xp.php');
	  }
	  elseif($_GET['url']=='tuto'){
	  include('rpgxp/tuto_xp.php');
	  }
	  elseif($_GET['url']=='scripts'){
	  include('rpgxp/scripts_menu.php');
	  }
	  elseif($_GET['url']=='tools'){
	  include('rpgxp/tools.php');
	  }
	   elseif($_GET['url']=='res'){
	  include('rpgxp/ressources.php');
	  }
	  elseif($_GET['url']=='script'){
	  include('rpgxp/script_lire.php');
	  }
	  ?>	  
	  </td>
      </table>
</body>
</html>
