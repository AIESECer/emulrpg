
<link href="../style1.css" rel="stylesheet" type="text/css" />
<p><span class="Contenu_Titre1">Divers - Lexqiue RPG</span>
<p class="Contenu_Texte">Voci un lexique qui contient des les mots exprimes dans les RPG. Si vous trouvez une erreur ou connaissez d'autres mots envoyez les mo<span class="Style3">i <a href="mailto:nazim102000@yahoo.fr ">nazim102000@yahoo.fr </a>.</p>
<p class="Contenu_Titre2">Liste des mots et leurs explications : </p>
<p>
    
<?php 
//---------Page lexique--////////////////////////////////////////////////
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
//---------------------Requete d'insertion de données-------------------------------------------------------------------------------------------------------------------------//
$sql=mysql_query("SELECT * from lexique Order By mot ASC") or die("Erreure requete");//
//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------//  

//*-----affichage des donnes------------------------------------///
while($res=mysql_fetch_array($sql)){
print'<span class="Contenu_Titre3"> '.$res['mot'].'</span><br>';
print '<span class="Contenu_Texte"> '.$res['des'].'<span>';
print'<br>
';
}
//-------------------------------------------------------------///

mysql_close();
?>
</p>
<p class="Bas_Remarque">J'espere que  vous avez appreci&eacute;s ce petite lexique. </p>
<p class="Bas_Remarque">Lundi 21-07-2006 par Yami </p>
