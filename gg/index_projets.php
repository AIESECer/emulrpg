<style type="text/css">
<!--
.Style1 {
	font-size: 16px;
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>
<p><strong><span class="Style1">Cr&eacute;ation de RPG: Presentation de projets </span></strong></p>
<p>
  <?
print'<div><b><font face="Arial" size="4" color="black"><b>AJOUTEZ VOTRE PROJET</b></font></b></div>';
print'<br>';
include('add_project.htm');
print'<br>';
print'<hr width="100%"  color="black">';
print'<div><b><font face="Arial" size="4" color="black"><b>VOS PROJETS</b></font></b></div>';
print'<br>';
include('list_projets.php');
?>
</p>
