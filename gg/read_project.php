<style type="text/css">
<!--
.Style1 {
	font-size: 16px;
	font-family: Arial, Helvetica, sans-serif;
}
.Style3 {font-family: Arial, Helvetica, sans-serif; font-size: 14px;}
-->
</style>
<p><strong>Creation de RPG: Fiche d'un projet</strong></p>
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

//--requete---------------------------------------------------------------------
$sql=mysql_query("SELECT * from projets projets  WHERE id='$_GET[id]' ") or die ("erreur requete");
$no=mysql_numrows($sql);
//------------------------------------------------------------------------------
if($no='0'){
print'<b>Pas de projets presenter en ce moment';
}else{
while($res=mysql_fetch_array($sql)){
print'';
print'<b>Titre du projet: </b>'.$res['titre'] ;
print'<br>';
print $res['createur'] ;
print'<br>';
print'<b>Contact:</b><a href="mailto:'.$res['email'].'">'.$res['email'].'</a>' ;
print'<br>';
print'<b>Site web du projet:</b>';
print '<a href="'.$res['site'].'" target="_blank">'.$res['site'].'</a>';
print'<br>';
print'<b>Description: </b></font><br>';
print $res['des'] ;
}
}
mysql_close();
?>

