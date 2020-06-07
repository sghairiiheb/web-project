<head>
<Meta charset="utf-8" http-equiv="Content-Type" content="text/html" >
        <TITLE>crud avis</TITLE> 
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="stylesheet" type= "text/css" href= "publicity-style.css"> 
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Document</title>
</head>


<?PHP 
include "../../../avis/core/avisC.php";
$avisCvar =new avisC();
$listeAviss=$avisCvar->afficherAviss();
?>
<center>
<div id="source0">

<table border="3">
<tr>
<td>id</td>
<td>remarque</td>
<td>note</td>
<td>supprimer</td>
<td>modifier</td>
</tr>
</div>

</center>

<?PHP
foreach($listeAviss as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['remarque']; ?></td>
	<td><?PHP echo $row['note']; ?></td>
	<td><form method="POST" action="supprimerAvis.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	
	
	
	<td><a href="modifierAvis.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>