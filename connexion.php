


<?php
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
?>