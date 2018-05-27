<style type="text/css">
<!--
.Style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 16px;
}
-->
</style>
<p><span class="Style1"> Liste des projets</span></p>
<p>
    
  <?
//--requete---------------------------------------------------------------------
$sql=mysql_query("SELECT * from projets projets Order By id Desc ") or die ("erreur requete");
$no=mysql_numrows($sql);
if($no='0'){
print'<font face="Arial" size="3" color=#FFFFFF><b>Pas de projets en présentation</b></font>';
}else{
//------------------------------------------------------------------------------
 print '<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
      <td><b>Nom:</b></td>
      <td><b>Site web du projet:</b></td>
      <td><b>E-mail:</b></td>
      <td >&nbsp;</td>
    </tr></b>';
    while($res=mysql_fetch_array($sql)){
   print'<tr>';
     print '<td>'.$res['titre'].'</td>';
    print'<td><a href="'.$res['site'].'" target="_blank">'.$res['site'].'</a></td>';
     print'<td><a href="mailto:'.$res['email'].'">'.$res['email'].'</a></td>';
      print'<td ><a href="create.php?id='.$res['id'].'&url=read">Voir</a></td>';
   print'</tr>';
}
}
 print '</table>';
  print '<br>';
  
mysql_close();
?>
</p>
