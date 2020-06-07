<?PHP
include "../../../avis/core/utilisateurC.php";
$utilisateurCvar=new utilisateurC();
if (isset($_POST["idu"])){
	$utilisateurCvar->supprimerUtilisateur($_POST["idu"]);
	header('Location: tables2.php');
}

?>