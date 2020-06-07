<?PHP
include "../../../avis/core/avisC.php";
$avisCvar=new avisC();
if (isset($_POST["id"])){
	$avisCvar->supprimerAvis($_POST["id"]);
	header('Location: tables.php');
}

?>