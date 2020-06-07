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
include"../../../avis/entities/utilisateur.php" ;
include"../../../avis/core/utilisateurC.php";
if(isset($_GET['idu']))
{
$utilisateurCvar= new utilisateurC();
$result=$utilisateurCvar->recupererUtilisateur($_GET['idu']);
foreach($result as $row)
{
$idu=$row['idu'];
$email=$row['email'];
$mdp=$row['mdp'];

?>
<form method="POST">
<table>
<caption>Modifier Utilisateur</caption>
<tr>
<td>idu</td>
<td><input type="number" name="idu" value="<?PHP echo $idu ?>"></td>
</tr>
<tr>
<td>email</td>
<td><input type="text" name="email" value="<?PHP echo $email ?>"></td>
</tr>
<tr>
<td>mdp</td>
<td><input type="text" name="mdp" value="<?PHP echo $mdp ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="idu_ini" value="<?PHP echo $_GET['idu'];?>"></td>
</tr>
</table>
</form>
<?PHP 
}
}
if(isset($_POST['modifier']))
{
$utilisateurvar=new utilisateur($_POST['idu'],$_POST['email'],$_POST['mdp']);
$utilisateurCvar->modifierUtilisateur($utilisateurvar,$_POST['idu_ini']);
echo $_POST['idu_ini'];
header('Location: tables2.php');
}
?>
</body>
</HTML>
