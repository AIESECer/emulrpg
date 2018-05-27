<style type="text/css">
<!--
.Style1 {
	font-size: 16px;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
}
.Style2 {font-size: 14px}
.Style3 {font-family: Arial, Helvetica, sans-serif; font-size: 16px;}
-->
</style>
<p><span class="Style1">Jeux-Video: F.A.Q
  <br> 
</span><span class="Style3"><span class="Style2">Vous &ecirc;tes dans la F.A.Q d'EmulRpg ici nous tenterons de r&eacute;pondre a vos question. Si vous avez des question posez les moi en envoyant un email a l'adresse nazim102000@yahoo.fr </span></span></p>

<?php
//---------Page faq--////////////////////////////////////////////////
//--------------------Données de connexion a mysql--------------------//
$host='localhost';//Hote---------------------------------------------//
$user='root';//nom d'utilisateur------------------------------------//
$pwd='';//mot de passe---------------------------------------------//
$base='emulrpg1_db';//nom de la bse de données--------------------//
//---------------------------------------------------------------//

//--------------------Connexion a Mysql-----------------------//
$db=mysql_connect($host,$user,$pwd);//-----------------------//
//----------------------------------------------------------//

//-------------------Selection de la base de données-------//
mysql_select_db($base,$db);//-----------------------------//
//-------------------------------------------------------//
//---------------------Requete de selection de données-------------------------------------------------------------------------------------------------------------------------//
$sql=mysql_query("SELECT * from faq ") or die("Erreure requete");//
$num=mysql_numrows($sql);
//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------//  

if($num=='0'){
print'Pas de questions pour le moment';
}else{
while($res=mysql_fetch_array($sql)){
print '<strong>'.$res['question'].'</strong>';
print'<br>';
print $res['reponse'];
}
}
mysql_close();

?>