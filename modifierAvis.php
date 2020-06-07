<HTML>
<head>

<Meta charset="utf-8" http-equiv="Content-Type" content="text/html" >
        <TITLE>Modifier Crud </TITLE> 
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link rel="stylesheet" type= "text/css" href= "publicity-style.css"> 
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Document</title>


</head>
<body>
<?PHP
include"../../../avis/entities/avis.php" ;
include"../../../avis/core/avisC.php";
if(isset($_GET['id']))
{
$avisCvar= new avisC();
$result=$avisCvar->recupererAvis($_GET['id']);
foreach($result as $row)
{
$id=$row['id'];
$remarque=$row['remarque'];
$note=$row['note'];

?>
<form method="POST">
<table>
<caption>Modifier Avis</caption>
<tr>
<td>id</td>
<td><input type="number" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>remarque</td>
<td><input type="text" name="remarque" value="<?PHP echo $remarque ?>"></td>
</tr>
<tr>
<td>note</td>
<td><input type="float" name="note" value="<?PHP echo $note ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP 
}
}
if(isset($_POST['modifier']))
{
$avisvar=new avis($_POST['id'],$_POST['remarque'],$_POST['note']);
$avisCvar->modifierAvis($avisvar,$_POST['id_ini']);
echo $_POST['id_ini'];
header('Location: tables.php');
}
?>
</body>
</HTML>
