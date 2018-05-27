<?
//-----donnes de connexion a mysql----------------------------------------------
$host='localhost';
$user='root';
$pwd='';
$base='emulrpg1_db';
//------------------------------------------------------------------------------

//-----------connexion a mysql--------------------------------------------------
$db=mysql_connect($host,$user,$pwd) or die ("erreur de connexion");
//------------------------------------------------------------------------------

//---selection de la base-------------------------------------------------------
mysql_select_db($base,$db) or die ("Selection ecoue");
//------------------------------------------------------------------------------

$date_verif=date("d-m-Y H:i");
$date=date("d-m-Y H:i");
$titre=addslashes($_POST['titre']);
$cre=addslashes($_POST['cre']);
$mail=addslashes($_POST['mail']);
$web=addslashes($_POST['site']);
$des=addslashes($_POST['des']);
//------------------------------------------------------------------------------
//---requete de selection-------------------------------------------------------
mysql_query("INSERT INTO  projets VALUES ('','$date_verif','$date','$titre','$cre','$mail','$web','$des')") or die ("requete echoue");
mysql_close();
header('location:http://127.0.0.1/EmulRpg/create.php?url=pres');
?>
