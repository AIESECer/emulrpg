<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>

<link href="style1.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="800" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <!--DWLayoutTable-->
  <tr>
    <td width="19" height="18" bgcolor="#EEEEEE"></td>
    <td colspan="3" valign="top" bgcolor="#EEEEEE" class="Section_Titre"><?php $time=date("d-m-Y");
	print'Nous sommes le: ' .$time; ?></td>
  <td width="10"></td>
  </tr>
  <tr>
    <td height="326" bgcolor="#EEEEEE">&nbsp;</td>
    <td colspan="3" valign="top" bgcolor="#FFFFFF"><!--DWLayoutEmptyCell-->&nbsp;</td>
  <td>&nbsp;</td>
  </tr>
  
  
    <tr>
    <td height="684" bgcolor="#EEEEEE">&nbsp;</td>
    <td width="147" valign="top" bgcolor="#C1D7C8">
	<?php include('menus/main_menu.htm'); ?>
    </td>
    <td width="59" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="565" valign="top" bgcolor="#FFFFFF" ">       
	<?php 
	if($_GET['url']=='tuto'){
	include('making/tuto_jeu.php');
	}
	elseif($_GET['url']=='menu'){
	include('menu_making.php');
	
	}
	elseif($_GET['url']=='lireb'){
	include('making/lire_jeu.php');
	}
	?>
  <td bgcolor="#EEEEEE">&nbsp;</td>
  </td>
  <tr>
    <td height="28" colspan="5" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
  </tr>
</table>
</body>
</html>
